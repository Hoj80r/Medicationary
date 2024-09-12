<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Question\InsertRequest;
use App\Http\Requests\Admin\Question\UpdateRequest;
use App\Http\Requests\Frontend\Question\QuestionRequest;
use App\Models\Answer;
use App\Models\Question;
use App\Utilities\ImageUploader;

class InquiriesController extends Controller
{
    public function landscape(){

        $currentUser = auth()->user();

        $inquiries = Answer::paginate(10);

        return view('admin.inquiries.index', compact('currentUser', 'inquiries'));
    }

    public function addInquiries(QuestionRequest $request){

//        $currentUser = auth()->user();

        $validatedData = $request->validated();

        $createQuestion= Question::create([
            'name' => $validatedData['name'],
            'title' => $validatedData['question_title'],
            'mobile' => $validatedData['mobile'],
            'explanation' => $validatedData['explanation'],
            'email' => $validatedData['email']
        ]);

        if (!$createQuestion){
            return back()->with('failed','خطا در ثبت درخواست');
        }
        return back()->with('success', 'درخواست با موفقیت ثبت شد');

    }

    public function input(){

        $currentUser = auth()->user();

        $questions = Question::paginate(10);

        return view('admin.inquiries.input', compact('currentUser','questions'));
    }

    public function answer($question_id){

        $currentUser = auth()->user();

        $question = Question::findOrFail($question_id);

        return view('admin.inquiries.answer', compact('currentUser','question'));
    }

    public function insert(InsertRequest $request, $question_id){

        $validatedData = $request->validated();

        $currentUser = auth()->user();

        $createdAnswer = Answer::create([
            'question_id' => $question_id,
            'title' => $validatedData['title'],
            'category' => $validatedData['category'],
            'description' => $validatedData['description'],
            'user_id' => $currentUser['id']
        ]);

        if (!$this->uploadImage($createdAnswer, $validatedData) or !$createdAnswer){
            return back()->with('failed', 'خطا در ثبت پاسخ');
        }

        return back()->with('success', 'پاسخ با موفقیت ثبت شد');

    }

    public function edit($answer_id){

        $currentUser = auth()->user();

        $answer = Answer::findOrFail($answer_id);

        $question_id = $answer->question_id;

        $question = Question::findOrFail($question_id);

        return view('admin.inquiries.edit', compact('answer', 'currentUser' , 'question'));
    }

    public function update(UpdateRequest $request, $answer_id){
        $validatedData = $request->validated();

        $currentUser = auth()->user();

        $answer = Answer::findOrFail($answer_id);

        $updatedAnswer = $answer->update([
            'title' => $validatedData['title'],
            'category' => $validatedData['category'],
            'description' => $validatedData['description'],
            'user_id' => $currentUser['id']
        ]);

        if (!$this->uploadImage($answer, $validatedData) or !$updatedAnswer){
            return back()->with('failed', 'خطا در بروزرسانی پاسخ');
        }

        return back()->with('success', 'پاسخ به روزرسانی شدند');

    }

    public function delete($answer_id){
        $answer = Answer::findOrFail($answer_id);

        $answer->delete();

        return back()->with('success', 'پاسخ با موفقیت حذف شد');
    }

    private function uploadImage($createdAnswer, $validatedData){

        try {
            $data = [];

            if (isset($validatedData['thumbnail_url'])){
                $path = 'Answers/' . $createdAnswer->id . '/' . $validatedData['thumbnail_url']->getClientOriginalName();

                ImageUploader::Upload($validatedData['thumbnail_url'],$path,'public_storage');

                $data += ['thumbnail_url' => $path] ;
            }

            if (isset($validatedData['file_url'])){
                $path = 'Answers/' . $createdAnswer->id . '/' . $validatedData['file_url']->getClientOriginalName();

                ImageUploader::Upload($validatedData['file_url'],$path,'public_storage');

                $data += ['file_url' => $path] ;
            }

            $updatedAnswer = $createdAnswer->Update($data);

            if(!$updatedAnswer){
                throw new \Exception('تصویر آپلود نشد');
            }

            return true;

        }catch (\Exception $e){
            return false;
        }
    }
}

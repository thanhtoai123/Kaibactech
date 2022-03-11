<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function store(Request $request){
        $request->validate(
            [
                'full_name' => ['required', 'min:8', 'max:30', 'unique:questions'],
                'date' => ['required'],
                'question' => ['required', 'string'],
                'file' => ['required'],
                'g-recaptcha-response' => ['required', 'captcha']
            ],
            [
                'required' => ':attribute không được bỏ trống',
                'min' => ':attribute có ít nhất 8 ký tự',
                'max' => ':attribute có nhiều nhất 30 ký tự',
                'unique' => ':attribute đã tồn tại',
                'string' => ':attribute phải là chuỗi ký tự',
                'g-recaptcha-response.required' => 'Vui lòng xác minh bạn không phải robot',
                'g-recaptcha-response.captcha' => 'Lỗi captcha, hãy thử lại',
            ],
            [
                'full_name' => 'Tên',
                'date' => 'Ngày',
                'question' => 'Câu hỏi',
                'file' => 'Tệp tin',
            ]
        );

        if($request -> hasFile('file')){
            $file = $request -> file;

            $path = 'public/file/';

            $type = $file -> getClientOriginalExtension();
            $name = $file -> getClientOriginalName();

            $url = $path . $name;

            if(file_exists($url)){
                $name = $file -> getClientOriginalName();
                $new_name = $name . ' - Copy.'. $type;
                $new_url = $path . $new_name;
                $i = 2;

                while(file_exists($new_url)){
                    $name = $file -> getClientOriginalName();
                    $new_name = $name . " - Copy({$i})". $type;
                    $new_url = $path . $new_name;
                    $i++;
                }

                $name = $new_name;
            }
            $file -> move($path, $name);
            $url = $path . $name;
        }

        Question::create([
            'full_name' => $request -> full_name,
            'date' => $request -> date,
            'question' => $request -> question,
            'file' => $url,
        ]);

        return 'Đã gửi';
    }
}

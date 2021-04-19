<?php
namespace App\Http\Controllers\Admin\mocktest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

use App\Model\Classroom;
use App\Model\Score;
use App\Http\Controllers\Admin\mocktest\AllScoreController;

class ClassController extends Controller {
   

    public static function index() {

        return view('admin.mocktest.class_detail');

    }


    public static function add_class(Request $request)
    {

        $name_room = DB::table('classroom')
        ->select('classroom_name')
        ->where('classroom_topic_exam', '=', $request->txttopic_exam)
        ->get();
            //dd($name_room); //$name_roomดึงชื่อห้องมาเช็คว่าซ้ำไหม แต่แสดงข้อมูลที่ดึงมาเป็นอาเรย์เป็นก้อน1เรดคอร์

            //ทำให้ต้องcount($name_room)เช็คว่ามีค่าเท่ากับ0ไหม 0 คือไม่เคยมีข้อมูล
        $date = date_create_from_format('d/m/Y',$request->dat_date_exam);

        $d_format = date_format($date,'Y-m-d');
        if(count($name_room) == 0){
            $add_class = DB::table('classroom')->insert(
                ['classroom_name' => $request->txtclassroom, 
                'classroom_pass' => $request->txtclass_pass,
                    'classroom_date_exam' => $d_format,//แปลงformatลงเวลาก่อน
                    'classroom_topic_exam' => $request->txttopic_exam,
                    'classroom_inclass' => $request->txtinclass,
                    'teacher_id' => $request->txtteacher
                ]);
            session()->flash('message','<div class="alert alert-success" role="alert">
                <i class="mdi mdi-check-all mr-2"></i><strong>Add Classroom Success</strong></div>'); 
            return redirect('dashboard');
        }else{
            session()->flash('message','<div class="alert alert-danger" role="alert">
                <i class="mdi mdi-check-all mr-2"></i><strong>Add Classroom Failed : NC Code already exists</strong></div>'); 

            return redirect('dashboard');
        }

    }

    public static function edit_class(Request $request)
    {
    //dd($request->all());
        $check_topic_exam = DB::table('classroom')
        ->select('*')
        ->join('users', 'classroom.teacher_id', '=', 'users.id')
        ->where('classroom_topic_exam', '=', $request->txttopic_exam)
        ->get(); 

        //dd($check_topic_exam[0]->classroom_topic_exam);

        $date = date_create_from_format('d/m/Y',$request->dat_date_exam);

        $d_format = date_format($date,'Y-m-d');
        

            if(count($check_topic_exam) == 0){ //ชื่อไม่ซ้ำ แก้ได้ทั้งหมด 
            $edit_class = DB::table('classroom')
            ->where('classroom_id','=',$request->classroom_id)
            ->update(['classroom_name' => $request->txtclassroom, 
            'classroom_pass' => $request->txtclass_pass,
            'classroom_date_exam' => $d_format,
            'classroom_topic_exam' => $request->txttopic_exam,
            'classroom_inclass' => $request->txtinclass,
            'teacher_id' => $request->txtteacher
        ]);
            session()->flash('message','<div class="alert alert-success" role="alert">
                <i class="mdi mdi-check-all mr-2"></i><strong>Edit Classroom Success</strong></div>');
            return redirect('dashboard');
        }elseif($check_topic_exam[0]->classroom_topic_exam == $request->txttopic_exam && $check_topic_exam[0]->classroom_id == $request->classroom_id){
            $edit_class = DB::table('classroom')
            ->where('classroom_id','=',$request->classroom_id)
            ->update(['classroom_name' => $request->txtclassroom,
            'classroom_pass' => $request->txtclass_pass,
            'classroom_date_exam' => $d_format,
            'classroom_inclass' => $request->txtinclass,
            'teacher_id' => $request->txtteacher
        ]);
            session()->flash('message','<div class="alert alert-success" role="alert">
                <i class="mdi mdi-check-all mr-2"></i><strong>Edit Classroom Success</strong></div>');
            return redirect('dashboard');
        }else{
            session()->flash('message','<div class="alert alert-danger" role="alert">
                <i class="mdi mdi-check-all mr-2"></i><strong>Edit Classroom Failed : '.$request->txttopic_exam.' already exists</strong></div>');
            return redirect('dashboard');
        }
    }



    public static function del_class(Request $request)
    {
        $del_class = DB::table('classroom')->where('classroom_id', '=', $request->classroom_id)->delete();
        $del_lis = DB::table('lis_score')->where('classroom_id','=',$request->classroom_id)->delete();
        $del_read = DB::table('read_score')->where('classroom_id','=',$request->classroom_id)->delete();
        $del_std = DB::table('std_score')->where('classroom_id','=',$request->classroom_id)->delete();


        return redirect('dashboard');
    }



    public static function class_detail()
    {

        return view('admin.mocktest.class_detail');
    }


    public static function classdetail_by_id($classroom_id='')
    {

        $classdetail_by_id = Classroom::classdetail_by_id($classroom_id);
        $student_in_class = Classroom::get_classroom_and_student($classroom_id);
        

        $get_class_id = ['class_id' => $classdetail_by_id[0]->id,
        'set_exam' => $classdetail_by_id[0]->name,
        'class_nccode' => $classdetail_by_id[0]->nccode,
        'class_name' => $classdetail_by_id[0]->coursename,
        'class_date_exam' => $classdetail_by_id[0]->lastdate,
        'teacher_name' => $classdetail_by_id[0]->th_name]; 

    

        foreach ($student_in_class as $value){
            
            @$score_wri_all = Score::score_writing($value->classroom_id,$value->std_id);
            @$score_lis = Score::score_lis($value->classroom_id,$value->std_id);
            @$score_read = Score::score_read($value->classroom_id,$value->std_id);

            $data[$value->std_id]['score_wri_1'] = 0;
            $data[$value->std_id]['score_wri_2'] = 0;
            $data[$value->std_id]['score_wri_3'] = 0;
            
            foreach ($score_wri_all  as $value_writing) {
                if($value_writing->title == '1'){
                    $data[$value->std_id]['score_wri_1'] =  $value_writing->score;

                }else if($value_writing->title == '2'){
                    $data[$value->std_id]['score_wri_2'] =  $value_writing->score; 

                }else {
                    $data[$value->std_id]['score_wri_3'] =  $value_writing->score; 
                }
            }

            $lis_score = AllScoreController::IELTSband(@$score_lis->lis_score_total);
            $read_score = AllScoreController::IELTSband(@$score_read->read_score_total);


            $total_score_wri = AllScoreController::resultOverAllWri($data[$value->std_id]['score_wri_1'],$data[$value->std_id]['score_wri_2'],$data[$value->std_id]['score_wri_3']);
            $total_score_wri = AllScoreController::floatingResultScore($total_score_wri);
        
            $total_over_all = AllScoreController::reSultOverAllband(@$lis_score,@$read_score,@$total_score_wri,@$value->score_speaking);


            
            $floating_score_all = AllScoreController::floatingResultScore($total_over_all);
            
            $data[$value->std_id] = [
            'lis_score' => @$lis_score,
            'read_score' => @$read_score,
            'score_speaking' => $value->score_speaking,
            'rec_course' => $value->score_rec_course,
            'expectband' => $value->score_expectband,
            'std_id' => $value->std_id,
            'std_name' => $value->std_name,
            'std_nickname' => $value->std_nickname,
            'set_exam' => $value->name,
            'score_wri_1' => $data[$value->std_id]['score_wri_1'],
            'score_wri_2' => $data[$value->std_id]['score_wri_2'],
            'score_wri_3' => $data[$value->std_id]['score_wri_3'],
            'score_wri_overall'=>$total_score_wri,
            'score_overall'=>$floating_score_all,
            'classroom_id'=>$value->classroom_id,
        ];  


    }

    //dd($data);

    return view('admin.mocktest.class_detail',compact('data','get_class_id'));
    }


    public static function print_classdetail($classroom_id='') {

        $classdetail_by_id = Classroom::classdetail_by_id($classroom_id);
        $student_in_class = Classroom::get_classroom_and_student($classroom_id);

        $get_class_id = ['class_id' => $classdetail_by_id[0]->id,
        'class_nccode' => $classdetail_by_id[0]->nccode,
        'class_name' => $classdetail_by_id[0]->coursename,
        'class_date_exam' => $classdetail_by_id[0]->lastdate,
        'teacher_name' => $classdetail_by_id[0]->th_name];

 
        foreach ($student_in_class as $value ){
            
            @$score_wri_all = Score::score_writing($value->classroom_id,$value->std_id);
            @$score_lis = Score::score_lis($value->classroom_id,$value->std_id);
            @$score_read = Score::score_read($value->classroom_id,$value->std_id);
            $data[$value->std_id]['score_wri_1'] = 0;
            $data[$value->std_id]['score_wri_2'] = 0;
            $data[$value->std_id]['score_wri_3'] = 0;
            
            foreach ($score_wri_all  as $value_writing) {
                if($value_writing->title == '1'){
                    $data[$value->std_id]['score_wri_1'] =  $value_writing->score;
                }else if($value_writing->title == '2'){
                    $data[$value->std_id]['score_wri_2'] =  $value_writing->score; 
                }else{
                    $data[$value->std_id]['score_wri_3'] =  $value_writing->score; 
                }
            }

            $lis_score = AllScoreController::IELTSband(@$score_lis->lis_score_total);
            $read_score = AllScoreController::IELTSband(@$score_read->read_score_total);

            $total_score_wri = AllScoreController::resultOverAllWri($data[$value->std_id]['score_wri_1'],$data[$value->std_id]['score_wri_2'],$data[$value->std_id]['score_wri_3']);
            $total_score_wri = AllScoreController::floatingResultScore($total_score_wri);
        
            $total_over_all = AllScoreController::reSultOverAllband(@$lis_score,@$read_score,@$total_score_wri,@$value->score_speaking);


            
            $floating_score_all = AllScoreController::floatingResultScore($total_over_all);
            
            $data[$value->std_id] = [
            'lis_score' => @$lis_score,
            'read_score' => @$read_score,
            'score_speaking' => $value->score_speaking,
            'rec_course' => $value->score_rec_course,
            'expectband' => $value->score_expectband,
            'std_id' => $value->std_id,
            'std_name' => $value->std_name,
            'std_nickname' => $value->std_nickname,
            'set_exam' => $value->set_exam,
            'score_wri_1' => $data[$value->std_id]['score_wri_1'],
            'score_wri_2' => $data[$value->std_id]['score_wri_2'],
            'score_wri_3' => $data[$value->std_id]['score_wri_3'],
            'score_wri_overall'=>$total_score_wri,
            'score_overall'=>$floating_score_all,
            'classroom_id'=>$value->classroom_id,
        ];  


    }
    //dd($data);

    return view('#',compact('data','get_class_id'));
    }



  public static function update_class_pass(Request $request)//golf
    {
 
        $data = DB::table('class')
        ->where('id','=',$request->class_id)
        ->update(['class_pass' => $request->class_pass]);
        session()->flash('message','<div class="alert alert-success" role="alert">
        <i class="mdi mdi-check-all mr-2"></i><strong>Update Classroom Password Success</strong></div>'); 
        return redirect('dashboard');
        
    } 

  public static function update_set_exam(Request $request)
  {

    $update_set_exam = DB::table('class')
    ->where('id','=',$request->class_id)
    ->update(['set_exam' => $request->set_exam]);

    session()->flash('message','<div class="alert alert-success" role="alert">
    <i class="mdi mdi-check-all mr-2"></i><strong>Update Set Exam Success</strong></div>');

    return redirect('dashboard');
  }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Academic;
use App\Program;
use App\Level;
use App\Shift;
use App\Time;
use App\Batch;
use App\Group;
use App\MyClass;
class CourseController extends Controller
{
    public function __construct() {
        $this->middleware('web');
    }
    //===================manage course===============
    public function getManageCourse(){

        $programs  = Program::all();
        $shifts    = Shift::all();
        $times     = Time::all();
        $batches   = Batch::all();
        $groups    = Group::all();
        $academics = Academic::orderBy('academic_id', 'DESC')->get();
        return view('courses.manageCourse',compact('programs','academics','shifts','times','batches','groups'));
    }

    //===================insert academic===============
    public function postInsertAcademic(Request $request){
    	if ($request->ajax()) {
    		return response(Academic::create($request->all()));
    	}
    }
    
    //===================insert program===============
    public function postInsertProgram(Request $request){
        if ($request->ajax()) {
            return response(Program::create($request->all()));
        }
    }
    //===================insert level===============
    public function postInsertLevel(Request $request){
        if ($request->ajax()) {
            return response(Level::create($request->all()));
        }
    }
    //===================show level===============
    public function showLevel(Request $request){
        if ($request->ajax()) {
            return response(Level::where('program_id',$request->program_id)->get());
        }
    }
    //===================insert shift===============
    public function postInsertShift(Request $request){
        if ($request->ajax()) {
            return response(Shift::create($request->all()));
        }
    }
    //===================insert time===============
    public function postInsertTime(Request $request){
        if ($request->ajax()) {
            return response(Time::create($request->all()));
        }
    }
    //===================insert batch===============
    public function postInsertBatch(Request $request){
        if ($request->ajax()) {
            return response(Batch::create($request->all()));
        }
    }
    //===================insert group===============
    public function postInsertGroup(Request $request){
        if ($request->ajax()) {
            return response(Group::create($request->all()));
        }
    }
    //===================insert class===============
    public function postInsertClass(Request $request){
        if ($request->ajax()) {
            return response(MyClass::create($request->all()));
        }
    }
    public function postEditClass(Request $request){
        if ($request->ajax()) {
            return response(MyClass::find($request->class_id));
        }
    }
    public function postUpdateClass(Request $request){
        if ($request->ajax()) {
            return response(MyClass::updateOrCreate(['class_id'=>$request->class_id],$request->all()));
        }
    }
    public function postDeleteClass(Request $request){
        if ($request->ajax()) {
            MyClass::destroy($request->class_id);
        }
    }

    //===============show class====================
    public function showClassInformation(Request $request){
        
        if ($request->academic_id != "" && $request->program_id == "") {

            $criterial = array('academics.academic_id'=>$request->academic_id);

        } elseif ($request->academic_id != "" && 
                  $request->program_id != "" && 
                  $request->level_id != "" &&
                  $request->shift_id != "" &&
                  $request->time_id != "" &&
                  $request->batch_id != "" &&
                  $request->group_id != "" ) {

            $criterial = array('academics.academic_id'=>$request->academic_id,
                                'programs.program_id'=>$request->program_id,
                                'levels.level_id'=>$request->level_id,
                                'shifts.shift_id'=>$request->shift_id,
                                'times.time_id'=>$request->time_id,
                                'batches.batch_id'=>$request->batch_id,
                                'groups.group_id'=>$request->group_id);
        }
        $classes = $this->classInformation($criterial)->get();
        return view('class.classInfo',['classes'=>$classes]);
    }

    public function classInformation($criterial){
        return MyClass::join('academics','academics.academic_id','=','classes.academic_id')
                            ->join('levels','levels.level_id','=','classes.level_id')
                            ->join('programs','programs.program_id','=','levels.program_id')
                            ->join('shifts','shifts.shift_id','=','classes.shift_id')
                            ->join('times','times.time_id','=','classes.time_id')
                            ->join('groups','groups.group_id','=','classes.group_id')
                            ->join('batches','batches.batch_id','=','classes.batch_id')
                            ->where($criterial)
                            ->orderBy('classes.class_id','DESC');
                            
        
    }
   
}

 if ($request->academic_id != "" && $request->program_id !== "") {
            $criterial = array('academics.academic_id'=>$request->academic_id);
        } elseif ($request->academic_id != "" &&
                  $request->program_id != "" &&
                  $request->level_id != "") {
            $criterial = array('academics.academic_id'=>$request->academic_id,
                                'programs.program_id'=>$request->program_id,
                                'levels.level_id'=>$request->level_id);
                    
        }
        $classes = $this->classInformation($criterial)->get();
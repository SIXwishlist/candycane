<?php 
class TimeEntryFixture extends CakeTestFixture {
  var $name = 'TimeEntry';
  var $import = array('table'=>'time_entries');
  var $records = array(
    array('created_on'=>'2007-03-23 12:54:18 +01:00', 'tweek'=>12, 'tmonth'=>3, 'project_id'=>1, 'comments'=>'My hours', 'updated_on'=>'2007-03-23 12:54:18 +01:00', 'activity_id'=>9, 'spent_on'=>'2007-03-23', 'issue_id'=>1, 'id'=>1, 'hours'=>4.25, 'user_id'=>2, 'tyear'=>2007),
    array('created_on'=>'2007-03-23 14:11:04 +01:00', 'tweek'=>11, 'tmonth'=>3, 'project_id'=>1, 'comments'=>"", 'updated_on'=>'2007-03-23 14:11:04 +01:00', 'activity_id'=>9, 'spent_on'=>'2007-03-12', 'issue_id'=>1, 'id'=>2, 'hours'=>150.0, 'user_id'=>1, 'tyear'=>2007),
    array('created_on'=>'2007-04-21 12:20:48 +02:00', 'tweek'=>16, 'tmonth'=>4, 'project_id'=>1, 'comments'=>"", 'updated_on'=>'2007-04-21 12:20:48 +02:00', 'activity_id'=>9, 'spent_on'=>'2007-04-21', 'issue_id'=>3, 'id'=>3, 'hours'=>1.0, 'user_id'=>1, 'tyear'=>2007),
    array('created_on'=>'2007-04-22 12:20:48 +02:00', 'tweek'=>16, 'tmonth'=>4, 'project_id'=>3, 'comments'=>'Time spent on a subproject', 'updated_on'=>'2007-04-22 12:20:48 +02:00', 'activity_id'=>10, 'spent_on'=>'2007-04-22', 'issue_id'=>null, 'id'=>4, 'hours'=>7.65, 'user_id'=>1, 'tyear'=>2007),
  );
}
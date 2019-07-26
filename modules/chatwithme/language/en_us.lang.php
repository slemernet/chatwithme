<?php
/*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************/

$mod_strings = array(
	'chatwithme' => 'Chat with me',
	'SINGLE_chatwithme' => 'Chat with me',
	'chatwithme ID' => 'Chat with me ID',
	'ErrProcessingAction' => 'Error processing action.',
	'IncorrectFormat' => 'Sorry, I could not understand the command',
	'Incorrect parameters' => 'Sorry, Incorrect parameters in method call.',
	'MMUserIDUpdated' => 'Mattermost user ID correctly updated',
	'MMUserIDError' => 'Mattermost user could not be found nor created!',
	'ThisIsHelp' => 'This is the syntax I understand:',
	'HelpTitle' => '**Hello!**, these are the commands you can use:',
	'record' => 'record',
	'deleted' => 'has been deleted',
	'notdeleted' => 'has NOT been deleted',
	'QuestionError' => 'Error processing the question.',
	'FoundSome' => 'I could not find the indicated element.',
	'OneOfThese' => 'Could it be one of these?',
	'ClickHereForFullResults' => 'Click Here for full answer',
	'_active' => 'Integration Active',
	'_cmdlang' => 'Command Language',
	'_username' => 'User name to post as',
	'_icon_url' => 'Icon URL to show on post',
	'_posturl' => 'URL to post messages to',
	'_tokens' => 'Comma separated list of valid tokens',
	'LBL_MODULE_NOT_FOUND' => 'I could not find the indicated module',
	'LBL_FIELD_NOT_FOUND' => 'I could not find the indicated field',
	'LBL_NOSEARCHRESULTS' => 'I could not find any information with that search term',
	'LBL_SEARCHRESULTS' => 'Search results:',
	'MMInvalidUser' => 'Invalid mattermost User: mattermost user ID cannot be found.',
	'OkWillDo' => 'Ok, will do :-)',
	'Reminder Postponed' => 'Reminder Postponed. Get back to you soon.',
	'Reminder Discarded' => 'Reminder Discarded. I will not bother you about this again.',
	'Reminder Command Not Recognized' => '**ERROR*: Reminder command not recognized',
	'Color' => 'Color',
	'Green' => 'Green',
	'Blue' => 'Blue',
	'Yellow' => 'Yellow',
	'Red' => 'Red',
	'Msg is ephemeral' => 'Message is ephemeral',
	'Title' => 'Title',
	'Body' => 'Message',
	'Buttons' => 'Buttons',
	'optional' => 'optional',
	'First Button Title' => 'First Button Title',
	'First Button Parameters' => 'First Button Parameters',
	'Second Button Title' => 'Second Button Title',
	'Second Button Parameters' => 'Second Button Parameters',
	'Third Button Title' => 'Third Button Title',
	'Third Button Parameters' => 'Third Button Parameters',
	'Postpone' => 'Postpone',
	'Discard' => 'Discard',
	'StartedNewTimer' => 'Okay, I started New Timer :stopwatch:',
	'ThereIsOpenTimer' => ':warning: There is another open timer, stop it first',
	'NoOpenTimer' => ':warning: Sorry, There is no started timer',
	'ProjectNotFound' => ':warning: Sorry, could not find that project',
	'TimerStoped1' =>'Timer stoped at ',
	'TimerStoped2' =>', I just need a few details for this time entry, which project did you work on?',
	'ProjectAdded1' =>'Ok, I selected ',
	'ProjectAdded2' =>'as the project, **What did you do?** start with _**#taskfortime** {task title}_',
	'ProjectAdded3' =>'as the project, **What did you do?** start with _**#logtask** {task title}_',
	'UpdateFeedback1' => ':tada: I have updated that time entry here is a recap: ',
	'For' => 'for',
	'UpdateFeedback2' => ' with the details',
	'ShowAll' => 'Show All',
	'CallError' => ':x: Invalid Call',
	'AddProject' => 'What project did you work on? I am fetching your most recent projects.' ,
	'AddLogTime' => ', **How many hours did you spend on this task?**. format _#timespent {hours minutes}_ You can type time in form of  \'3.3\', or  \'3.3\', or \'3hrs 30 mins\' ',
	'Pname' => 'PROJECT NAME',
	'TypeProject' => 'Type the Project you worked on, syntax _```#taskforproject``` ``{ID}``_',
	'RecordUpdated' => ':tada: Record updated successfully!',
	'RecordNotUpdated' => 'Record update failed!',
	'InvalidField' => ':x: Invalid field name',
	// commands
	'delete_command' => '**delete {record} [yes]**: Delete a record',
	'show_command' => '**show {question}**: Launch a question and see the results',
	'find_command1' => '**find [{module}] {term}**: search the given term globally or in the given module',
	'find_command2' => '**find module {field}{condition}{value}**: search the {field} on the module for the {value}, where condition can be =|>|>=|<|<=|%',
	'see_command' => '**see {record}**: See the details of a record',
	'remindme_command1' => '**remindme {about this} [at] $1 h:m**: will send a message more or less **AT** the indicated time',
	'remindme_command2' => '**remindme {about this} [in] Dd Hh Mm**: will send a message more or less **IN** D days, H hours, and M minutes',
	'starttimer_command' => '**starttimer** : will start a new timer if there is no open timer',
	'stoptimer_command' => '**stoptimer** : will stop the last open timer if it exists',
	'logtime_command' => 'will create a new timecontrol entry record, and ask for more details',
	'logtask_command' => '**logtask {task title}** : Insert title of the timecontrol record',
	'timespent_command' => '**timespent {hours minutes}** : example 3.3 or 3:3 or 3hrs 30mins',
	'taskforproject_command' => '**taskforproject** {ID} insert project to the timecontrol records',
	'update_command' => '**update {crmid} {fieldname}={value}**: Update field value of a certain record',
);
?>

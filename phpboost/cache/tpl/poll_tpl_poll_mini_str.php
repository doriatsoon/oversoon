<?php $tplString = '';
if (!isset($this->_block['question']) || !is_array($this->_block['question'])) $this->_block['question'] = array();
foreach ($this->_block['question'] as $question_key => $question_value) {
$_tmpb_question = &$this->_block['question'][$question_key];
$tplString .= '
<form method="post" action="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/poll/poll'; if (isset($_tmpb_question['ID'])) $tplString .= $_tmpb_question['ID']; $tplString .= '" class="normal_form">
<div class="module_mini_container">
<div class="module_mini_top">
<h5 class="sub_title">'; if (isset($this->_var['L_MINI_POLL'])) $tplString .= $this->_var['L_MINI_POLL']; $tplString .='</h5>
</div>
<div class="module_mini_contents" style="text-align:center">
<span style="font-size:10px;">'; if (isset($_tmpb_question['QUESTION'])) $tplString .= $_tmpb_question['QUESTION']; $tplString .= '</span><hr style="width:90%;" />
<br />
<p style="padding-left: 6px;text-align: left;">
';
if (!isset($_tmpb_question['radio']) || !is_array($_tmpb_question['radio'])) $_tmpb_question['radio'] = array();
foreach ($_tmpb_question['radio'] as $radio_key => $radio_value) {
$_tmpb_radio = &$_tmpb_question['radio'][$radio_key];
$tplString .= '
<label><input type="radio" name="radio" value="'; if (isset($_tmpb_radio['NAME'])) $tplString .= $_tmpb_radio['NAME']; $tplString .= '" /> <span class="text_small">'; if (isset($_tmpb_radio['ANSWERS'])) $tplString .= $_tmpb_radio['ANSWERS']; $tplString .= '</span></label>
<br /><br />	
';
}
$tplString .= '

';
if (!isset($_tmpb_question['checkbox']) || !is_array($_tmpb_question['checkbox'])) $_tmpb_question['checkbox'] = array();
foreach ($_tmpb_question['checkbox'] as $checkbox_key => $checkbox_value) {
$_tmpb_checkbox = &$_tmpb_question['checkbox'][$checkbox_key];
$tplString .= '
<label><input type="checkbox" name="'; if (isset($_tmpb_checkbox['NAME'])) $tplString .= $_tmpb_checkbox['NAME']; $tplString .= '" value="'; if (isset($_tmpb_checkbox['NAME'])) $tplString .= $_tmpb_checkbox['NAME']; $tplString .= '" /> <span class="text_small">'; if (isset($_tmpb_checkbox['ANSWERS'])) $tplString .= $_tmpb_checkbox['ANSWERS']; $tplString .= '</span></label>
<br /><br />	
';
}
$tplString .= '
</p>
<p style="margin:0;margin-top:10px;">
<input class="submit" name="valid_poll" type="submit" value="'; if (isset($this->_var['L_VOTE'])) $tplString .= $this->_var['L_VOTE']; $tplString .='" /><br />
<a class="small_link" href="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/poll/poll'; if (isset($this->_var['U_POLL_RESULT'])) $tplString .= $this->_var['U_POLL_RESULT']; $tplString .='">'; if (isset($this->_var['L_POLL_RESULT'])) $tplString .= $this->_var['L_POLL_RESULT']; $tplString .='</a>
</p>
</div>	
<div class="module_mini_bottom">
</div>
</div>
</form>	
';
}
$tplString .= '';
if (!isset($this->_block['result']) || !is_array($this->_block['result'])) $this->_block['result'] = array();
foreach ($this->_block['result'] as $result_key => $result_value) {
$_tmpb_result = &$this->_block['result'][$result_key];
$tplString .= '
<div class="module_mini_container">
<div class="module_mini_top">
<h5 class="sub_title">'; if (isset($this->_var['L_MINI_POLL'])) $tplString .= $this->_var['L_MINI_POLL']; $tplString .='</h5>
</div>
<div class="module_mini_contents" style="text-align:center">
<span style="font-size:10px;">'; if (isset($_tmpb_result['QUESTION'])) $tplString .= $_tmpb_result['QUESTION']; $tplString .= '</span>

<hr style="width:90%;" />
<br />
';
if (!isset($_tmpb_result['answers']) || !is_array($_tmpb_result['answers'])) $_tmpb_result['answers'] = array();
foreach ($_tmpb_result['answers'] as $answers_key => $answers_value) {
$_tmpb_answers = &$_tmpb_result['answers'][$answers_key];
$tplString .= '
<p style="padding-left:6px;text-align: left;">
<span class="text_small">'; if (isset($_tmpb_answers['ANSWERS'])) $tplString .= $_tmpb_answers['ANSWERS']; $tplString .= '</span>
<br />
<img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/poll_left.png" height="8px" width="" alt="'; if (isset($_tmpb_answers['WIDTH'])) $tplString .= $_tmpb_answers['WIDTH']; $tplString .= '%" title="'; if (isset($_tmpb_answers['WIDTH'])) $tplString .= $_tmpb_answers['WIDTH']; $tplString .= '%" /><img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/poll.png" height="8px" width="'; if (isset($_tmpb_answers['WIDTH'])) $tplString .= $_tmpb_answers['WIDTH']; $tplString .= '" alt="'; if (isset($_tmpb_answers['WIDTH'])) $tplString .= $_tmpb_answers['WIDTH']; $tplString .= '%" title="'; if (isset($_tmpb_answers['WIDTH'])) $tplString .= $_tmpb_answers['WIDTH']; $tplString .= '%" /><img src="'; if (isset($this->_var['PATH_TO_ROOT'])) $tplString .= $this->_var['PATH_TO_ROOT']; $tplString .='/templates/'; if (isset($this->_var['THEME'])) $tplString .= $this->_var['THEME']; $tplString .='/images/poll_right.png" height="8px" width="" alt="'; if (isset($_tmpb_answers['WIDTH'])) $tplString .= $_tmpb_answers['WIDTH']; $tplString .= '%" title="'; if (isset($_tmpb_answers['WIDTH'])) $tplString .= $_tmpb_answers['WIDTH']; $tplString .= '%" />
<span class="text_small">
'; if (isset($_tmpb_answers['PERCENT'])) $tplString .= $_tmpb_answers['PERCENT']; $tplString .= '%
</span>
</p>
';
}
$tplString .= '

<p class="text_small" style="margin:0;margin-top:10px;">
'; if (isset($_tmpb_result['VOTES'])) $tplString .= $_tmpb_result['VOTES']; $tplString .= ' '; if (isset($this->_var['L_VOTE'])) $tplString .= $this->_var['L_VOTE']; $tplString .='
</p>
</div>
<div class="module_mini_bottom">
</div>
</div>
';
}
$tplString .= '
'; ?>
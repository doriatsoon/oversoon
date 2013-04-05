        <script type="text/javascript">
        <!--
            const FORM = 'form_';
            const SPECIALIZED_FORM_LINK = 'specialize_form_link_';
            var LastSpecializedFormUsed = 'all';
            
            function ChangeForm(module)
            // Change le cadre des résultats
            {
                hide_div(FORM + LastSpecializedFormUsed);
                show_div(FORM + module);

                document.getElementById(SPECIALIZED_FORM_LINK + LastSpecializedFormUsed).style.fontSize = '10px';
                document.getElementById(SPECIALIZED_FORM_LINK + LastSpecializedFormUsed).className = 'small_link';

                LastSpecializedFormUsed = module;
                document.getElementById('search_in').value = module;
                document.getElementById(SPECIALIZED_FORM_LINK + module).style.fontSize = '12px';
                document.getElementById(SPECIALIZED_FORM_LINK + module).className = 'small_link SpecializedFormLink';
            }
            
            function check_search_form_post()
            // V�rifie la validité du formulaire
            {
                var textSearched = document.getElementById("TxTsearched").value;
                
                if ( textSearched.length > 3 )
                {
                    textSearched = escape_xmlhttprequest(textSearched);
                    return true;
                }
                else
                {
                    alert(<?php if (isset($this->_var['L_WARNING_LENGTH_STRING_SEARCH'])) echo $this->_var['L_WARNING_LENGTH_STRING_SEARCH']; ?>);
                    return false;
                }
            }
        -->
        </script>

       <div class="module_position">
            <div class="module_top_l"></div>
            <div class="module_top_r"></div>
            <div class="module_top"><?php if (isset($this->_var['L_TITLE_SEARCH'])) echo $this->_var['L_TITLE_SEARCH']; ?></div>
            <div class="module_contents">
                <div class="spacer">&nbsp;</div>
                <form action="<?php if (isset($this->_var['U_FORM_VALID'])) echo $this->_var['U_FORM_VALID']; ?>" onsubmit="return check_search_form_post();" method="post">
                    <div class="search_field"><input type="text" id="TxTsearched" name="q" value="<?php if (isset($this->_var['TEXT_SEARCHED'])) echo $this->_var['TEXT_SEARCHED']; ?>" class="text" onclick="if(this.value=='<?php if (isset($this->_var['L_SEARCH'])) echo $this->_var['L_SEARCH']; ?>...')this.value='';" onblur="if(this.value=='')this.value='<?php if (isset($this->_var['L_SEARCH'])) echo $this->_var['L_SEARCH']; ?>...';" /></div>
                    <div class="spacer">&nbsp;</div>
                    <div style="text-align:center;">
                        <p id="forms_selection">
                            <a id="specialize_form_link_all" href="javascript:ChangeForm('all');" class="small_link"><?php if (isset($this->_var['L_SEARCH_ALL'])) echo $this->_var['L_SEARCH_ALL']; ?></a>
                            <?php if (!isset($this->_block['forms']) || !is_array($this->_block['forms'])) $this->_block['forms'] = array();
foreach ($this->_block['forms'] as $forms_key => $forms_value) {
$_tmpb_forms = &$this->_block['forms'][$forms_key]; ?>
                                <a id="specialize_form_link_<?php if (isset($_tmpb_forms['MODULE_NAME'])) echo $_tmpb_forms['MODULE_NAME']; ?>" href="javascript:ChangeForm('<?php if (isset($_tmpb_forms['MODULE_NAME'])) echo $_tmpb_forms['MODULE_NAME']; ?>');" class="small_link"><?php if (isset($_tmpb_forms['L_MODULE_NAME'])) echo $_tmpb_forms['L_MODULE_NAME']; ?></a>
                            <?php } ?>
                        </p>
                    </div>
                    <div id="form_all" class="SpecializedForm">
                        <fieldset class="searchFieldset">
                            <dl>
                                <dt><label><?php if (isset($this->_var['L_SEARCH_IN_MODULES'])) echo $this->_var['L_SEARCH_IN_MODULES']; ?><br /><span><?php if (isset($this->_var['L_SEARCH_IN_MODULES_EXPLAIN'])) echo $this->_var['L_SEARCH_IN_MODULES_EXPLAIN']; ?></span></label></dt>
                                <dd>
                                    <select id="searched_modules" name="searched_modules[]" size="5" multiple="multiple" class="list_modules">
                                    <?php if (!isset($this->_block['searched_modules']) || !is_array($this->_block['searched_modules'])) $this->_block['searched_modules'] = array();
foreach ($this->_block['searched_modules'] as $searched_modules_key => $searched_modules_value) {
$_tmpb_searched_modules = &$this->_block['searched_modules'][$searched_modules_key]; ?>
                                        <option value="<?php if (isset($_tmpb_searched_modules['MODULE'])) echo $_tmpb_searched_modules['MODULE']; ?>" id="<?php if (isset($_tmpb_searched_modules['MODULE'])) echo $_tmpb_searched_modules['MODULE']; ?>"<?php if (isset($_tmpb_searched_modules['SELECTED'])) echo $_tmpb_searched_modules['SELECTED']; ?>><?php if (isset($_tmpb_searched_modules['L_MODULE_NAME'])) echo $_tmpb_searched_modules['L_MODULE_NAME']; ?></option>
                                    <?php } ?>
                                    </select>
                                </dd>
                            </dl>
                        </fieldset>
                    </div>
                    <?php if (!isset($this->_block['forms']) || !is_array($this->_block['forms'])) $this->_block['forms'] = array();
foreach ($this->_block['forms'] as $forms_key => $forms_value) {
$_tmpb_forms = &$this->_block['forms'][$forms_key]; ?>
                    <div id="form_<?php if (isset($_tmpb_forms['MODULE_NAME'])) echo $_tmpb_forms['MODULE_NAME']; ?>" class="SpecializedForm" style="display:none">
                        <fieldset class="searchFieldset">
                        <?php if (isset($_tmpb_forms['C_SEARCH_FORM']) && $_tmpb_forms['C_SEARCH_FORM']) {if (isset($_tmpb_forms['SEARCH_FORM'])) echo $_tmpb_forms['SEARCH_FORM'];} else { ?><p class="label"><?php if (isset($_tmpb_forms['SEARCH_FORM'])) echo $_tmpb_forms['SEARCH_FORM']; ?></p><?php } ?>
                        </fieldset>
                    </div>
                    <?php } ?>
                    <div class="spacer">&nbsp;</div>
                    <fieldset class="fieldset_submit">
                        <legend><?php if (isset($this->_var['L_SEARCH'])) echo $this->_var['L_SEARCH']; ?></legend>
                        <input type="hidden" id="search_in" name="search_in" value="all" />
                        <input type="hidden" id="query_mode" name="query_mode" value="0" />
                        <input type="submit" id="search_submit" name="search_submit" value="<?php if (isset($this->_var['L_SEARCH'])) echo $this->_var['L_SEARCH']; ?>" class="submit" />
                        <input type="hidden" name="token" value="<?php if (isset($this->_var['TOKEN'])) echo $this->_var['TOKEN']; ?>" />
                    </fieldset>
                </form>
            </div>
            <div class="module_bottom_l"></div>
            <div class="module_bottom_r"></div>
            <div class="module_bottom" style="text-align:center;"></div>
        </div>
        <script type="text/javascript">
        <!--
            ChangeForm('<?php if (isset($this->_var['SEARCH_MODE_MODULE'])) echo $this->_var['SEARCH_MODE_MODULE']; ?>');
        -->
        </script>
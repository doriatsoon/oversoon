<?php $tplString = '<div title="L_SYNDICATION_CHOICES" class="syndication_choices" onmouseover="ShowSyndicationMenu(this)" onmouseout="HideSyndication(this)">
<ul>
<li><a href="'; if (isset($this->_var['U_FEED'])) $tplString .= $this->_var['U_FEED']; $tplString .=''; if (isset($this->_var['SEPARATOR'])) $tplString .= $this->_var['SEPARATOR']; $tplString .='feed=rss" title="'; if (isset($this->_var['L_RSS'])) $tplString .= $this->_var['L_RSS']; $tplString .='"><img src="'; if (isset($this->_var['PATH_TO_MENU'])) $tplString .= $this->_var['PATH_TO_MENU']; $tplString .='/images/addrss.png" title="'; if (isset($this->_var['L_RSS'])) $tplString .= $this->_var['L_RSS']; $tplString .='" alt="'; if (isset($this->_var['L_RSS'])) $tplString .= $this->_var['L_RSS']; $tplString .='" /></a></li>
<li><a href="'; if (isset($this->_var['U_FEED'])) $tplString .= $this->_var['U_FEED']; $tplString .=''; if (isset($this->_var['SEPARATOR'])) $tplString .= $this->_var['SEPARATOR']; $tplString .='feed=atom" title="'; if (isset($this->_var['L_ATOM'])) $tplString .= $this->_var['L_ATOM']; $tplString .='"><img src="'; if (isset($this->_var['PATH_TO_MENU'])) $tplString .= $this->_var['PATH_TO_MENU']; $tplString .='/images/addatom.png" title="'; if (isset($this->_var['L_ATOM'])) $tplString .= $this->_var['L_ATOM']; $tplString .='" alt="'; if (isset($this->_var['L_ATOM'])) $tplString .= $this->_var['L_ATOM']; $tplString .='" /></a></li>
<li>
<a href="http://www.netvibes.com/subscribe.php?type=rss&amp;url='; if (isset($this->_var['U_FEED'])) $tplString .= $this->_var['U_FEED']; $tplString .='?feed=rss" title="">
<img src="'; if (isset($this->_var['PATH_TO_MENU'])) $tplString .= $this->_var['PATH_TO_MENU']; $tplString .='/images/add2netvibes.png" title="netvibes" alt="Netvibes" />
</a>
</li>
</ul>
</div>
'; ?>
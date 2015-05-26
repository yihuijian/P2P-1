<div class="list">
	<div class="list_title clearfix">
	<div class="cur"><a href="<?php
echo parse_url_tag("u:index|uc_deal#borrowed|"."".""); 
?>"><?php echo $this->_var['page_title']; ?></a></div>
</div>
<div class="list_cont clearfix">
    <table width="100%" align="center" border="0" cellspacing="1" class="funds">
        <tbody>
        	<tr class="title">
	            <td colspan="4">
	                <span class="f_dgray b">还款统计 </span>
	            </td>
	        </tr>
	        <tr>
	            <td width="25%">
	            	总借款额
	            </td>
	            <td width="25%" align="right">
	                <span style="padding-right: 50px"><?php 
$k = array (
  'name' => 'format_price',
  'v' => $this->_var['user_statics']['borrow_amount'],
);
echo $k['name']($k['v']);
?></span>
	            </td>
	            <td width="25%">
	            	发布借款笔数
	            </td>
	            <td width="25%">
	                <?php echo $this->_var['user_statics']['deal_count']; ?>
	            </td>
	        </tr>
	        <tr>
	            <td width="25%">
	            	已还本息
	            </td>
	            <td width="25%" align="right">
	                <span style="padding-right: 50px"><?php 
$k = array (
  'name' => 'format_price',
  'v' => $this->_var['user_statics']['repay_amount'],
);
echo $k['name']($k['v']);
?></span>
	            </td>
	            <td width="25%">
	            	成功借款笔数
	            </td>
	            <td width="25%">
	                <?php echo $this->_var['user_statics']['success_deal_count']; ?>
	            </td>
	        </tr>
	        <tr>
	            <td width="25%">
	            	待还本息
	            </td>
	            <td width="25%" align="right">
	                <span style="padding-right: 50px">
	                     <?php 
$k = array (
  'name' => 'format_price',
  'v' => $this->_var['user_statics']['need_repay_amount'],
);
echo $k['name']($k['v']);
?>
	                </span>
	            </td>
	            <td width="25%">
	            	正常还清笔数
	            </td>
	            <td width="25%">
	                <?php echo $this->_var['user_statics']['zc_repay_deal_count']; ?>
	            </td>
	        </tr>
	        <tr>
	            <td width="25%">
	            	待还管理费
	            </td>
	            <td width="25%" align="right">
	                <span style="padding-right: 50px">
	                  <?php 
$k = array (
  'name' => 'format_price',
  'v' => $this->_var['user_statics']['need_manage_amount'],
);
echo $k['name']($k['v']);
?>
	                </span>
	            </td>
	            <td width="25%">
	            	 提前还清笔数
	            </td>
	            <td width="25%">
	                <?php echo $this->_var['user_statics']['tq_repay_deal_count']; ?>
	            </td>
	        </tr>
	        <tr>
	            <td width="25%">
	                 &nbsp;
	            </td>
	            <td width="25%" align="right">
	                &nbsp;
	            </td>
	            <td width="25%">
	            	未还清笔数
	            </td>
	            <td width="25%">
	                <?php echo $this->_var['user_statics']['wh_repay_deal_count']; ?>
	            </td>
	        </tr>
	    </tbody>
	</table>
    <div class="blank20"></div>
    <table width="100%" border="0px" cellspacing="1" class="funds tc">
        <tbody>
        	<tr class="title">
	            <td colspan="4" class="f_dgray b">
	            	逾期统计
	            </td>
	        </tr>
	        <tr>
	            <td width="25%">
	            	逾期本息
	            </td>
	            <td width="25%" align="right">
	                <span style="padding-right: 50px">
	                    <?php 
$k = array (
  'name' => 'format_price',
  'v' => $this->_var['user_statics']['yuqi_amount'],
);
echo $k['name']($k['v']);
?>
	                </span>
	            </td>
	            <td width="25%">
	            	逾期次数
	            </td>
	            <td width="25%">
	                <?php echo $this->_var['user_statics']['yuqi_count']; ?>
	            </td>
	        </tr>
	        <tr>
	            <td width="25%">
	            	逾期费用
	            </td>
	            <td width="25%" align="right">
	                <span style="padding-right: 50px">
	                    <?php 
$k = array (
  'name' => 'format_price',
  'v' => $this->_var['user_statics']['yuqi_impose'],
);
echo $k['name']($k['v']);
?>
	                </span>
	            </td>
	            <td width="25%">
	               	严重逾期次数
	            </td>
	            <td width="25%">
	                <?php echo $this->_var['user_statics']['yz_yuqi_count']; ?>
	            </td>
	        </tr>
	    </tbody>
	</table>
    <div class="blank20"></div>
    <table width="100%" border="0" cellspacing="1px" class="tc funds">
        <tbody>
        	<tr class="title">
	            <td colspan="4" class="b f_dgray">
	            	投资数据分析 
	            </td>
	        </tr>
	        <tr>
	            <td width="25%">
	            	加权平均借款利率
	            </td>
	            <td width="25%" align="right">
	                <span style="padding-right: 50px"><?php 
$k = array (
  'name' => 'number_format',
  'v' => $this->_var['user_statics']['avg_rate'],
  'f' => '2',
);
echo $k['name']($k['v'],$k['f']);
?>%</span>
	            </td>
	            <td width="25%">
	            	平均每笔借款金额
	            </td>
	            <td width="25%">
	               <?php 
$k = array (
  'name' => 'format_price',
  'v' => $this->_var['user_statics']['avg_borrow_amount'],
);
echo $k['name']($k['v']);
?>
	            </td>
	        </tr>
	    </tbody>
	</table>
</div>
</div>
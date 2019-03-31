<HTML>

<?php
//随机生成一个编号
$FileID=date("YmdHis") . '' . rand(100,999);
$userid=$_SESSION['userid'];
$username=$_SESSION['username'];
$bankid=$_REQUEST['bankid'];

?>

<TABLE cellSpacing=0 cellPadding=0 width=760 align=center bgColor=#666666 border=0>
<FORM name=formbill action="Send.php" method=post>
<input type="hidden" name="userid" value="<?php echo $userid?>">
<input type="hidden" name="username" value="<?php echo $username?>">
<input type="hidden" name="bankid" value="<?php echo $bankid?>">  
    <TBODY>
      <TR> 
        <TD bgColor=#ffffff> <TABLE cellSpacing=0 cellPadding=2 width=750 bgColor=#666666 border=0>
            <TBODY>
              <TR> 
                <TD width="480" bgColor=#ffffff><B>付款方式：</B>
                  <table width="760" cellpadding="4" cellspacing="1" align="center" bordercolor="#000000" >
                    <TBODY>
					<TR> 
                        <TD height=23 align=right>订单号：</TD>
                        <TD height=23 ><?php echo $FileID?><input name="v_oid" type="hidden" maxlength="64" value="<?php echo $FileID?>">
                          &nbsp;&nbsp; <font color="#FF0000">//</font>选填项，订单号</TD>
                      </TR>
                      <TR>
                        <TD align=right height=24>备注2：</TD>
                        <TD valign="top"><input name="remark2" type=text id="remark2" value="备注2">
&nbsp;&nbsp; <font color="#FF0000">//</font>选填项，总长不超过150个字符</TD>
                      </TR>
                      <TR>
                        <TD align=right height=24>订单总金额（元）：</TD>
                        <TD height=24><input name="v_amount" type=text value="0.01"  onkeyup="if(isNaN(value))execCommand('undo')">
                          &nbsp;&nbsp; <font color="#FF0000">*</font>必填项，譬如：<font color="#FF0000">0.01</font></TD>
                      </TR>
                      <TR> 
                        <TD align=right height=24>&nbsp;</TD>
                        <TD valign="top"><input type="submit" name="Submit" value=" 开始支付 "></TD>
                      </TR>
                  </TABLE>
                </TD>
              </TR>
			  <tr>
			    <td bgColor=#ffffff height=50 ><br>说明: 订单号项如果填写我们将按照您提交的订单号为准，如果此项为空，我们将按照网银在线的标准格式 年月日-号商户号-号小时分钟秒 来自动生成订单号。</td>
			  </tr>
            </TBODY>
          </TABLE>
        </TD>
      </TR>
  </FORM></TBODY>
</TABLE>
</BODY></HTML>

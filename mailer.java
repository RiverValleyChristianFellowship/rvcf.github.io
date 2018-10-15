
<FORM NAME="mailer" METHOD="post" ACTION="" ENCTYPE="text/plain" 
onSubmit="(document.mailer.action += mailtoandsubject)"> 

<!-- Original:  Jeff Kieke -->

<!-- This script and many more are available free online at -->
<!-- The JavaScript Source!! http://javascript.internet.com -->

<TABLE BORDER=0>
<TR VALIGN="top">
<TD>Recipient:</TD>
<TD><SELECT NAME="mailtoperson" onChange="msg(this.form)">
<OPTION VALUE="">-- Select --
<OPTION VALUE="person1@aol.com">person1@aol.com
<OPTION VALUE="person2@aol.com">person2@aol.com
<OPTION VALUE="person3@aol.com">person3@aol.com
</SELECT></TD>
</TR>
<TR VALIGN="top">
<TD>Your Name:</TD>
<TD><INPUT TYPE="text" SIZE=45 NAME="name" onChange="msg(this.form)"></TD>
</TR>
<TR VALIGN="top">
<TD>Your Email:</TD>
<TD><INPUT TYPE="text" SIZE=45 NAME="email" onChange="msg(this.form)"></TD>
</TR>
<TR VALIGN="top">
<TD>Priority:</TD>
<TD>
<SELECT NAME="priority" onChange="msg(this.form)">
<OPTION VALUE="Normal">Normal
<OPTION VALUE="Urgent">Urgent
<OPTION VALUE="No Reply Needed">No reply needed
</SELECT></TD>
</TR>
<TR VALIGN="top">
<TD>Subject:</TD>
<TD><INPUT TYPE="text" SIZE=45 NAME="subject" onChange="msg(this.form)"></TD>
</TR>
<TR VALIGN="top">
<TD>Message:</TD>
<TD><TEXTAREA NAME="message" COLS=45 ROWS=5 WRAP="virtual" OnChange="msg(this.form)"></TEXTAREA></TD>
</TR>
<TR>
<TD> </TD>
<TD><INPUT TYPE="submit" VALUE="Send Message">
<INPUT TYPE="reset" VALUE="Reset"></TD>
</TR>
</TABLE>
</FORM>

<SCRIPT LANGUAGE="JavaScript">
function msg() {
document.mailer.action = "mailto:" 
mailtoandsubject = ((document.mailer.mailtoperson.options[document.mailer.mailtoperson.selectedIndex].value) + '?subject=' + document.mailer.subject.value); 
} 
</SCRIPT> 

<p><center>
<font face="arial, helvetica" size="-2">Free JavaScripts provided<br>
by <a href="http://javascriptsource.com">The JavaScript Source</a></font>
</center><p>

<!-- Script Size:  1.78 KB  -->

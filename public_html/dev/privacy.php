<?php 

error_reporting(E_ALL);
ini_set('display_errors', 'On');
ini_set('session.use_cookies', '1');

require_once('template.php');

//Template header()
skinHeader();

?>
<center><b>Unblock Ticket Request System Privacy Policy</b></center>
<p>Welcome to the Unblock Ticket Request System. We recognize that you are a volunteer working to contribute
towards the world's largest free online encyclopedia. As such, we recognize that there may be some information
you'd rather keep private. We value that privacy and wish to assure you that we have taken steps to ensure
that by requesting unblocking here, you are not at risk of exposing your identity on the internet. At the
same time, however, in order to properly process your unblock request, we do need to collect certain
information that will allow us to distinguish you from others editing from the same or a nearby location
that seek to do Wikipedia harm.</p>

<h4>Why we have this policy</h4>

<p>In addition to our desire to protect your privacy, this policy is in place to comply with German and
European Union laws regarding the collection, processing, and use of private data. While Wikipedia and
the Wikimedia Foundation are both located in the United States, the Toolserver on which UTRS is hosted
is located in Germany, and so is subject to those laws. These laws require that we obtain your consent 
to collect such data, and that we outline specifically how it is used and why it is necessary. 
For more information about these laws, please see the European Commission's website on data protection 
laws and directives at <a href="http://ec.europa.eu/justice/policies/privacy/index_en.htm">
http://ec.europa.eu/justice/policies/privacy/index_en.htm</a>.</p>

<h4>What data do you collect, and why?</h4>

<p>Wikipedia uses the Mediawiki software, which allows administrators to issue blocks to accounts 
and specific <a href="http://enwp.org/IP_address">IP addresses</a>. Some of these blocks may be configured 
to affect both. To differentiate between legitimate users and vandals, both of whom may be caught on these 
blocks, specific members trusted by the community are granted access to the CheckUser tool. This tool 
allows these users to view a person's <a href="http://enwp.org/User_agent">useragent</a>, which provides 
data about your internet browser and operating system, generally for the purpose of assisting web 
developers in making websites display properly. All of this data is managed by the Wikimedia 
Foundation, with servers hosted in the United States; you can view the Wikimedia Foundation's 
privacy policy <a href="https://wikimediafoundation.org/wiki/Privacy_policy">here</a>.</p>

<p>As a result of this, volunteers at the Unblock Ticket Request System, several of whom are CheckUsers on 
Wikipedia, require this same information - your IP address and useragent - to be able to review your block. 
Without your IP address, we cannot look up the block that is affecting you and will not be able to assist.
Even if your account was blocked, usually an "autoblock" will have been applied to your IP address by the
MediaWiki software, and these are not always lifted automatically. Without your useragent, we will have a
very difficult time distinguishing you from other users who mean Wikipedia harm, which could delay or
prevent you from being unblocks.</p>

<p>It is important to note that this information is provided by your internet browser to any website 
you visit; it is not possible to confirm any specific person's identity with this information. We only
use this to confirm that multiple accounts or IP addresses were used by the same person, whoever that
person may be.</p>

<p>We also require your email address so that we can respond to you with questions and the result of 
your appeal.</p>

<p>By submitting an appeal at UTRS, you agree to provide this information and allow UTRS volunteers 
to view it for the explicit purpose of reviewing your block on the English Wikipedia.</p>

<h4>How is this data stored, and who can see it?</h4>

<p>We store this data in a secure database, which is visible only to UTRS developers, several of whom
are identified to the Wikimedia Foundation, just as Checkusers are required to do. In order to assist 
with reviewing your block, this information is provided to UTRS volunteers as follows:
<ul>
<li>Your email address will be obscured for most people reviewing your block. All emails we send you 
will be sent through the system, so there is no need for volunteers to view your email address in 
full. As a result, only the domain of your address will be visible to most volunteers (for example, 
wikiuser@gmail.com will display only as *****@gmail.com). The domain remains visible to assist volunteers 
in determining if you are a legitimate user of a school or business network, if you are editing from 
one. UTRS tool developers will be able to see your full email address to ensure the tool is working 
properly. <i>(Administrators: Your email address is stored along with your UTRS account to allow tool
administrators to contact you about your account. This does not get deleted, but is never visible
to anyone other than UTRS developers looking at the database itself.)</i></li>
<li>Your IP address will be visible alongside the rest of your appeal to anyone reviewing the 
block. Again, this is necessary to allow us to look up your block and determine possible outcomes.</li>
<li>Your useragent will only be visible to UTRS developers and those reviewing the block that have 
access to the CheckUser tool on Wikipedia. CheckUsers need to see your useragent to help 
differentiate you from the person the block is intended for, and UTRS developers need to see this 
information to ensure the tool is working properly.</li>
</ul></p>
<p>At no point will your data be provided to a third party for any purpose; furthermore, this 
information will be removed from our system no more than one week after your appeal is closed. This
removal process is automated, so you don't need to worry about anyone forgetting to hit the "delete"
button.</p>



<h4>What are my rights with regard to this information?</h4>

<p>If you wish to see what information has been collected on you by this system, you may email the 
development team at <a href="mailto:unblock@toolserver.org?subject=UTRS%20information%20request">
unblock@toolserver.org</a> to request all information associated with your appeal.</p>

<p>If you do not wish for this information to be collected by UTRS, you may appeal via your talk 
page on Wikipedia, or by email to <a href="mailto:unblock-en-l@lists.wikimedia.org">
unblock-en-l@lists.wikimedia.org</a>. Please note that if you appeal on Wikipedia, your IP address 
and useragent may be examined by any CheckUser, with cause, in accordance with the Wikimedia 
Foundation Privacy Policy. Wikipedia is hosted in the United States and is not subject to the 
same laws. If you appeal by email, your email address will naturally be visible to all volunteers 
on the mailing list, and they may require that you provide additional information in order to look
up your block.</p>

<p>If you have already entered an appeal at UTRS and wish for your information to be deleted 
immediately, please email the development team at 
<a href="mailto:unblock@toolserver.org?subject=UTRS%20appeal%20removal%20request">unblock@toolserver.org</a> 
to have your appeal deleted from the database. You will then need to appeal your block through one 
of the alternate venues mentioned above. Again, please note that this information will be automatically 
removed one week after your appeal is resolved.</p>

If you have any questions about this policy, please contact the development team at 
<a href="mailto:unblock@toolserver.org?subject=Privacy%20questions">unblock@toolserver.org</a>.
<?php 

skinFooter();

?>
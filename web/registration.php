<?php
    $page_title="Registration Information";
    include("include/header.php");
?>

<h1>Registration Information</h1>

<p>
  Here is some preliminary information about registration prices and categories. All fees are in US Dollars. The registration website will be online soon. For further information, we kindly ask you to contact the <a href="mailto: marinho # inf ufrgs br">general chairs</a>.
</p>

<ul data-role="listview" data-inset="true" data-theme="a" data-content-theme="a" class="registration">
  <li data-role="list-divider">Early Registration (Before July 14th, 11:59pm CDT)</li>
  <?php
    add_registrationheader("Event", "Member", "Non-Member", "Student");
    add_registrationitem  ("Conference", "600", "750", "300");
    add_registrationitem  ("Workshop", "250", "400", "150");
    add_registrationitem  ("Tutorial (Full-day)", "250", "400", "150");
    add_registrationitem  ("Tutorial (Half-day)", "150", "250", "100");
    add_registrationitem  ("Tutorial (2 half-days on the same day)", "250", "400", "150");
    add_registrationitem  ("", "", "", "");
  ?>

  <li data-role="list-divider">Late Registration (Starting from July 15th, 00:00am CDT)</li>
  <?php
    add_registrationheader("Event", "Member", "Non-Member", "Student");
    add_registrationitem  ("Conference", "700", "900", "500");
    add_registrationitem  ("Workshop", "300", "450", "200");
    add_registrationitem  ("Tutorial (Full-day)", "300", "450", "200");
    add_registrationitem  ("Tutorial (Half-day)", "200", "300", "150");
    add_registrationitem  ("Tutorial (2 half-days on the same day)", "300", "450", "200");
  ?>
</ul>

<h2>A Special Note on Author Registration Policy</h2>

<p>Each accepted paper/poster must be presented by one of its author(s) at the SIGCOMM main conference or workshop. The author must register for the corresponding event according to his/her membership status: e.g. for a student author presenting a paper/poster, he/she only needs to register under the student category. We do not require a full-rate registration for each paper.</p>

<h2>Extras</h2>

<p>All conference registrations (Member / Non-member / Student) include coffee &amp; pastries, lunches, coffee breaks, a welcome reception, a banquet dinner and a conference kit. In addition to these items, a student registered for the conference will also receive a ticket to the student dinner.</p>

<p>Workshop / Tutorial registration includes breakfasts, coffee breaks, lunches on the day of the registered Workshop / Tutorial. (Welcome Reception and banquet dinner are not included.)</p>

<?php include ("include/footer.php"); ?>

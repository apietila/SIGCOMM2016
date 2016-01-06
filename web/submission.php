<?php
    $page_title="Paper Submission Requirements";
    include("include/header.php");
?>

<h1>Paper Submission Requirements</h1>

<p>
	The SIGCOMM 2016 conference seeks papers describing significant research contributions to the field of computer and data communication networks. Paper submissions typically report novel results firmly substantiated by experimentation, simulation, or analysis. As an aid to the community, the SIGCOMM web site provides <a href="//www.sigcomm.org/publish/hints-tips-and-guides/">useful advice</a> to authors planning to submit to SIGCOMM conferences. Papers published in <a href="//www.sigcomm.org/top/learn/sigcomm-conference/sigcomm-conference">previous SIGCOMM conferences</a> also serve as excellent examples of anticipated scope, rigor, and length.</p>
	
<p>
	To submit papers to the SIGCOMM 2016 conference, first carefully read the following sections on:

<ul>
	<li><a data-ajax="false" href="#experience">Experience track</a>: a track focused on deployment experience, to which authors may opt to submit. Note that based on the preference authors express at submission time, each submission will only be considered for either the &quot;main&quot; conference track or the experience track, but not both.</li>
	<li><a data-ajax="false" href="#ethics">Ethics considerations</a>: the conference&#8217;s ethics expectations.</li>
	<li><a data-ajax="false" href="#registration">Paper registration</a>: what to register, and how to determine TPC conflicts.</li>
	<li><a data-ajax="false" href="#novelty">Paper novelty</a>: what is eligible to be submitted, including policies on prior papers at a workshop.</li>
	<li><a data-ajax="false" href="#anonymity">Paper anonymity</a>: how to prepare for anonymous submission.</li>
	<li><a data-ajax="false" href="#formatting">Paper formatting</a>: how to format your paper, including LaTeX and Word templates.</li>
	<li><a data-ajax="false" href="#acceptance">Paper acceptance</a>: what to expect if your paper is accepted.</li>
</ul>

Then use the <a href="//sigcomm16.hotcrp.com">paper submission site</a> to:

<ul>
	<li>Register your paper by <b>17:00 Pacific Standard Time (PST), January 22, 2016</b>.</li>
	<li>Submit your paper by <b>17:00 Pacific Standard Time (PST), January 29, 2016</b>.</li>
</ul>

<b>These are <font color="#ff0000">hard deadlines</font> and no extensions will be given.</b>

</p>

<p>
	The information on this page is intentionally comprehensive. Both new authors and veteran authors are urged to read through this page in its entirety. Our goal is to ensure that all authors have a consistent understanding of the submission process, and that everyone complies with the process fairly. If you have any questions about submitting papers to SIGCOMM 2016, or encounter problems with the paper submission site, contact the PC chairs well before the deadlines.
</p>

<a name="experience"><h2>Experience Track</h2></a>

<p>
	SIGCOMM 2016 will carry forward the experience track first introduced in SIGCOMM 2015. The goal is to encourage submissions of papers on the design, analysis, and evaluation of techniques in commercial or otherwise widely used deployment. The PC will evaluate a submission to the experience track with the understanding that its contribution may lie predominantly in extending the community&#8217;s knowledge of how known techniques fare in realistic settings, and particularly in settings that most in the community cannot duplicate, for reasons of scale or otherwise. At paper registration time, authors must explicitly indicate if a submission is to be considered for the experience track. Each submission will only be considered for one track - either the experience track or the main conference track, but not both - in accordance with the authors&#8217; preference expressed at submission time.
</p>


<a name="ethics"><h2>Ethics Considerations</h2></a>

<p>
	Authors must as part of the submission process attest that their work complies with all applicable ethical standards of their home institution(s), including, but not limited to privacy policies and policies on experiments involving humans. The PC takes a broad view of what constitutes an ethical concern, and authors agree to be available at any time during the review process to rapidly respond to queries from the PC chairs regarding ethical standards.
</p>

<a name="registration"><h2>Paper Registration</h2></a>

<p>
	<a href="//sigcomm16.hotcrp.com">Registration</a> only requires submission of paper metadata: paper title and abstract, author names, affiliations, contact email addresses, topics matching the subject matter of the paper, track (experience or main), and conflicts with PC members. The paper itself does not need to be submitted at the registration deadline. However, the paper title and abstract submitted during registration must be complete - not placeholders - and correctly characterize the paper that will be submitted. Authors can change the wording of their titles and abstracts for submission, but their essence should not fundamentally change. The PC will use the information provided during registration as a basis for making review assignments.
</p>

<p>
	Both authors and PC members provide PC conflict information. The PC will review paper conflicts to ensure the integrity of the reviewing process, adding conflicts where necessary. Broadly, we define conflict of interest with a PC member using the following principles:
</p>

<ol>
	<li>You are currently employed at the same institution, have been previously employed at the same institution within the last 12 months, or are going to begin employment at the same institution.</li>
	<li>You have a professional partnership as follows:</li>
	<ul>
		<li>Past or present association as thesis advisor or advisee.</li>
		<li>Collaboration on a project, publication, or grant proposal within the past 2 years (i.e., 2014 or later).</li>
	</ul>
</ol>

<p>
	If there is no basis for PC conflicts provided by authors, those conflicts will be removed. In particular, do not improperly identify PC members as a conflict in an attempt to avoid having an individual review your paper.
</p>

<a name="novelty"><h2>Paper Novelty</h2></a>

<p>
	Under no circumstances should authors submit previously published work, submit the same work simultaneously to multiple venues, or submit papers that plagiarize the work of other authors. Like other conferences and journals, SIGCOMM prohibits these practices and may take action against authors who have engaged in them. In some cases, the program committee may share information about submitted papers with other conference chairs and journal editors to ensure the integrity of papers under consideration. If the PC discovers a violation of these principles, sanctions may include, but are not limited to, contacting the institutions of the authors and publicizing the details of the case.
</p>

<p>
	SIGCOMM will review extended versions of previously-published short preliminary papers (such as workshop papers) in accordance with published <a href="//www.sigcomm.org/about/policies/frequently-asked-questions-faq/">SIGCOMM policy</a> and the <a href="//www.acm.org/publications/policies/plagiarism_policy">ACM Plagiarism Policy</a>. To preserve author anonymity, authors MUST cite this related prior work, while making a good-faith effort not to reveal common authorship. For example, such a submission should not explicitly point out that specific text has been adopted from the author&#8217;s own prior work.
</p>

<p>
	Papers accompanied by nondisclosure agreement requests will not be considered for publication, nor ever disclosed.
</p>

<a name="anonymity"><h2>Paper Anonymity</h2></a>

All submitted papers will be judged based on their quality and relevance through double-blind reviewing, where the identities of the authors are withheld from the reviewers. As an author, you are required to make a good-faith effort to preserve the anonymity of your submission, while at the same time allowing the reader to fully grasp the context of related past work, including your own. Common sense and careful writing will go a long way towards preserving anonymity. Minimally, please take the following steps when preparing your submission:

<ul>
	<li>Remove the names and affiliations of authors from the title page.</li>
	<li>Remove acknowledgment of identifying names and funding sources.</li>
	<li>Use care in naming your files. Source file names (e.g., &quot;Alice-n-Bob.dvi&quot;) are often embedded in the final output as readily accessible comments.</li>
	<li>Use care in referring to related work, particularly your own. Do not omit references to provide anonymity, as this leaves the reviewer unable to grasp the context. Instead, reference your past work in the third person, just as you would any other piece of related work by another author.</li>
</ul>

<a name="formatting"><h2>Paper Formatting</h2></a>

<p>
	All submissions must obey the following formatting requirements. Your goal as an author is to produce a clearly readable submission within these constraints.
</p>
	
<p>
	Before final submission, you are expected to make sure that your paper complies with these requirements. Authors are strongly discouraged from violating the formatting requirements with the aim of including additional material: <b><font color="#ff0000">submissions that violate the formatting requirements may not be reviewed</font></b>. You can visually inspect a page-by-page report of your paper format using the same tool as the submission system via a separate <a href="//www.sysnet.ucsd.edu/sigops/banal/index.php">online form</a>.
</p>

<p>
	After the submission deadline, we will use the same tool to check the conformance of papers. The format checking tool uses heuristics and can make mistakes. The PC chairs will manually inspect and possibly reject those papers with evident format violations. However, no paper will be rejected due to format violations without first being checked by hand.
</p>

<ul>
	<li>Submit papers of no more than <b><font color="#ff0000">twelve (12) single-spaced pages</font></b>, including figures, tables, any appendices, etc.followed by as many pages as necessary for references. Papers whose non-reference content is longer than 12 pages will not be reviewed. Note that this length specification is the same as in 2015, but differs from that in prior years.</li>
	<li>Submit papers using a 10pt font on 12pt leading formatted for printing on Letter-sized (8.5&quot; by 11&quot;) paper. Paper text blocks must follow ACM guidelines: double-column, with each column 9.25&quot; by 3.33&quot;, 0.33&quot; space between columns. Each column must contain no more than 55 lines of text. For submission, use the following <a href="doc/sig-alternate-10pt.cls" rel="external">LaTeX template</a> or <a href="doc/word-acm-10pt-on-12pt-7.0x9.25.doc" rel="external">Word template</a> to ensure compliance. Please do NOT use copies of these templates that you might find elsewhere since we cannot be sure that those are compliant.</li>
	<li>Note that the final copy will be 14 pages using the ACM standard 10pt format. This style may result in more text than your submission so that you can adequately address reviewer and shepherd comments.</li>
	<li>List the submission number and the number of pages in your paper in the author block, e.g., &quot;Paper #N, 14 pages&quot;, beneath your title. Registering your title, abstract, etc., will provide a paper submission number. Per the anonymity guidelines, remember to remove any author names.</li>
	<li>Provide an abstract of no more than 200 words.</li>
	<li>Number the pages.</li>
	<li>Submit papers in PDF (Portable Document Format) and ensure that they are compatible with Adobe Acrobat (English version). Other formats, including Postscript, will not be accepted. Avoid using non-standard fonts. The PC must be able to display and print your submission exactly as we receive it using only standard tools and printers, so we strongly suggest that you use only standard fonts that are embedded in the PDF file.</li>
	<li>Ensure that the paper prints well on black-and-white printers, not color printers. Pay particular attention to figures and graphs in the paper to ensure that they are legible without color. Explicitly using grayscale colors will provide best control over how graphs and figures will print on black-and-white printers.</li>
	<li>Ensure that labels and symbols used in graphs and figures are legible, including the font sizes of tick marks, axis labels, legends, etc.</li>
	<li>Limit the file size to less than 15 MB. Contact the PC chairs if you have a file larger than 15 MB.</li>
</ul>

<a name="acceptance"><h2>Paper Acceptance</h2></a>

<p>
	The SIGCOMM 2016 PC will notify authors of acceptance/rejection decisions by April 22, 2016. All accepted papers may be shepherded by members of the PC. Authors of accepted papers should plan to interact with their shepherds immediately after notification, and to budget sufficient time between acceptance notification and the camera-ready deadline to coordinate with their shepherd. It is a requirement that the paper be considered acceptable to the assigned shepherd so that the updates to the paper reflect the issues raised by the PC (conflicts will be mediated by the PC chairs) before the paper is considered &quot;accepted&quot; to appear in the conference proceedings. In addition, the publisher of the SIGCOMM proceedings will review all accepted papers submitted for the camera-ready deadline. Authors should also budget sufficient time immediately after the camera-ready deadline to be available and responsive to any editing changes requested by the publisher after submitting their camera-ready paper.
</p>

<p>
	After acceptance, substantive changes to paper titles require approval by the PC chairs. Only in exceptional circumstances should authors change their author list, and only with the approval of the PC chairs.
</p>

<p>
	Authors of accepted papers will also need to sign an ACM copyright release form. Electronic copies of the camera-ready papers will be published on the conference Web site before the conference, unless authors specifically request otherwise. All rejected papers will be treated as permanently confidential.
</p>

<?php include ("include/footer.php"); ?>

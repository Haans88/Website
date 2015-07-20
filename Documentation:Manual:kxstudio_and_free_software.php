<?php
$PAGE_TITLE    = "KXStudio";
$PAGE_TYPE     = "NONKXSTUDIO";
$PAGE_SOURCE_1 = ARRAY("/Documentation", "/Documentation", "/Documentation:Manual:kxstudio_and_free_software");
$PAGE_SOURCE_2 = ARRAY("Documentation", "Manual", "KXStudio and Free Software");
include_once("includes/header.php");
?>

<div class="level1">

<p>

Along with its Ubuntu base and the whole GNU/Linux world, KXStudio has its roots in the <a href="http://www.gnu.org/philosophy/free-sw.html" class="urlextern" title="http://www.gnu.org/philosophy/free-sw.html"  rel="nofollow">Free Software</a> movement led by Richard Stallman and the GNU project. All of the custom KXStudio tools are <acronym title="Free/Libre and Open Source Software">FLOSS</acronym>, as is the vast majority of other included software.
</p>

<p>
As KXStudio&#039;s primary purpose is to make the installation of a GNU/Linux-based audio/visual workstation as easy as possible, a few non-free additions are included where they assist that goal.
</p>

</div>

<h2><span name="non-free_software_from_ubuntu" id="non-free_software_from_ubuntu">Non-free software from Ubuntu</span></h2>
<div class="level2">

<p>

KXStudio is based upon Ubuntu which includes select non-free software. The Ubuntu non-free software is listed in separate repositories marked as either “non-free”, “restricted”, or “multiverse”. See <a href="https://help.ubuntu.com/community/Repositories" class="urlextern" title="https://help.ubuntu.com/community/Repositories"  rel="nofollow">help.ubuntu.com/community/Repositories</a> for more information. Also, the standard Linux kernel includes some “binary blobs” — i.e. sections that have no source available (and so hamper the freedom to modify).
</p>

<p>
The main non-free software that KXStudio includes from Ubuntu is <strong>Flash Player</strong>. Many websites still, unfortunately, depend upon Adobe Flash, so Flash Player provides the smoothest user experience. Thankfully, the <acronym title="Free/Libre and Open Source Software">FLOSS</acronym> standards Webm and HTML5 are becoming increasingly popular, and there is a <acronym title="Free/Libre and Open Source Software">FLOSS</acronym> Flash-replacement called GNASH. Hopefully there will be less reason for the non-free Flash Player in the future.
</p>

<p>
Ubuntu also includes some non-free codecs for accessing proprietary file formats.
</p>

<p>
Some hardware manufacturers, particularly among wireless cards and graphics accelerators, do not make <acronym title="Free/Libre and Open Source Software">FLOSS</acronym> drivers for Linux but create proprietary <strong>non-free drivers</strong>. <acronym title="Free/Libre and Open Source Software">FLOSS</acronym> alternatives often function well enough, and KXStudio does not include proprietary drivers. However, because the proprietary drivers often provide superior performance, KXStudio includes a simple program to install them. See the separate page on <a href="<?php echo $ROOT; ?>/Documentation:Manual:video_drivers" class="wikilink1" title="video_drivers">installing non-free video drivers</a>.
</p>

</div>

<h2><span name="specific_kxstudio_non-free_software" id="specific_kxstudio_non-free_software">Specific KXStudio non-free software</span></h2>
<div class="level2">

<p>
The KXStudio non-free repository includes the following:

</p>
<ul>
<li class="level1"><div class="li"> <strong>LightScribe support</strong> — LightScribe is a proprietary technology that uses specially made CDs and DVDs to allow users to burn direct-to-disc labels. </div>
</li>
</ul>
<ul>
<li class="level1"><div class="li"> <strong>LinuxDSP</strong> is a proprietary developer of quality Linux-native audio plugins. Most of the included plugins are limited demo versions, both proprietary and also not free of charge. The developer supports other <acronym title="Free/Libre and Open Source Software">FLOSS</acronym> projects, however, and is active in the GNU/Linux audio community.</div>
</li>
</ul>
<ul>
<li class="level1"><div class="li"> <strong>Loomer</strong> is another developer of cross-platform proprietary audio plugins. They have ported several of their offerings to GNU/Linux. Aspect is among the most powerful Linux-native softsynths available. All Loomer plugins come as demos until a license is purchased.</div>
</li>
</ul>
<ul>
<li class="level1"><div class="li"> <strong>Pianoteq</strong> is a piano instrument synthesizer with exceptionally advanced features and sound quality. The included software also runs in demo mode until a license is purchased.</div>
</li>
</ul>
<ul>
<li class="level1"><div class="li"> <strong>REAPER</strong> is a Windows program that has official support to run in WINE. A fully native version for Linux is in the works although it will likely remain non-free. REAPER runs as a fully functional demo which simply reminds users to buy a modestly-priced license after a trial period. Many people coming from Mac or Windows may be familiar with REAPER and want to continue using it with KXStudio.</div>
</li>
</ul>
<ul>
<li class="level1"><div class="li"> <strong>Renoise</strong> is a Linux-native “tracker” style music production program. It has a dedicated user base and offers many features. The demo is functional with the exception of song and instrument rendering.</div>
</li>
</ul>
<ul>
<li class="level1"><div class="li"> <strong>SunVox</strong> is another Linux-native “tracker” style music program. It&#039;s known for being available for a wide range of platforms including Windows, Linux, Mac <acronym title="Operating System">OS</acronym> X, Windows Mobile, PalmOS, Maemo, Meego, iOS and Android. Although SunVox is proprietary, the desktop version used in KXStudio does not have any limitations.</div>
</li>
</ul>
<ul>
<li class="level1"><div class="li"> <strong>VST plugin support</strong> — The VST format is itself proprietary, but specific plugins may be either <acronym title="Free/Libre and Open Source Software">FLOSS</acronym> or proprietary. VST plugins may be either Windows-based (these function via the Free Wine software) or Linux-native. Several <acronym title="Free/Libre and Open Source Software">FLOSS</acronym> programs support VST plugins. All included VST plugins, whether <acronym title="Free/Libre and Open Source Software">FLOSS</acronym> or proprietary, are in the non-free repository. You can also download Windows VSTs from internet sources and use them within KXStudio, although this is not officially supported.</div>
</li>
</ul>

</div>

<h2><span name="what_if_i_want_to_avoid_non-free_software" id="what_if_i_want_to_avoid_non-free_software">What if I want to avoid non-free software?</span></h2>
<div class="level2">

<p>

Specific non-free software can be manually uninstalled, see the instructions for <a href="<?php echo $ROOT; ?>/Documentation:Manual:package_management" class="wikilink1" title="package_management">package management</a>. Aside from the items listed above, another way to quickly identify a good portion of installed non-free software is to install the program <em>vrms</em>, the Virtual Richard M Stallman. Running vrms will bring up a list of non-free issues on your system, although it does not catch everything.
</p>

<p>
To remove non-free software from the package listings, choose “Configure Software Sources” under “Settings” in Muon Package Manager. There, you can uncheck the Proprietary drivers and multiverse (copyright or legally problematic) listings. On the “Other Software” tab, you can remove the Medibuntu and kxstudio.sourceforge.net repositories.
</p>

<p>
If you want to use strictly 100% Free Software, including even the strictly-<acronym title="Free/Libre and Open Source Software">FLOSS</acronym> Linux-libre kernel, consider <a href="http://trisquel.info/" class="urlextern" title="http://trisquel.info/"  rel="nofollow">Trisquel</a>, which is based on Ubuntu yet is certified by the Free Software Foundation. You can then add the main KXStudio-Team PPAs following the same <a href="<?php echo $ROOT; ?>/Documentation:Ubuntu:Upgrade" class="urlextern" title="<?php echo $ROOT; ?>/Documentation:Ubuntu:Upgrade"  rel="nofollow">instructions</a> as for other Ubuntu-based systems. Although this should work, it is not officially supported at this time.
</p>

<p>
There is also a long-term plan to potentially move the KXStudio repositories to Debian, which is more strictly <acronym title="Free/Libre and Open Source Software">FLOSS</acronym> than Ubuntu (although still not FSF-approved because it provides a mechanism for users to install non-free software).

</p>

</div>

<p><br/></p>

<?php
include_once("includes/footer.php");
?>

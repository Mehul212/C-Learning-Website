

<?php
session_start();
if(!isset($_SESSION['email']))
{
  header("location:login.html");
}
$email=$_SESSION['email'];
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
	<div id="logo">
      <img src="logo.gif" width=150px height=90px></img>
     <h2>c++ tutorial.</h2>
     </div>
<div id="navbar">
<ul>
<li><a  href="home.php" >Home</a></li>
<li><a  href="https://www.codechef.com/ide" >Practice</a></li>
<li><a  href="code.php" >Code</a></li>
<li><a  href="about.php" >About</a></li>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 <li> <a href="logout.php" >Logout</a></li>
</ul>
</div>
<div class="main">
<div class="example-must-read"><p>To understand this example, you should have the knowledge of following C++ programming
            topics:</p><ul><li>C++ Arrays</a></li><li>C++ Strings</a></li></ul></div><div class="clearfix">


  <div class="region region-content">
    <div id="block-system-main" class="block block-system">

    
  <div class="content">
    <div id="node-424" class="node node-cpp-example clearfix" about="/cpp-programming/examples/vowel-consonant-frequency-string" typeof="sioc:Item foaf:Document">
<span property="dc:title" content="C++ Program to Find the Number of Vowels, Consonants, Digits and White Spaces in a String" class="rdf-meta element-hidden"></span><div class="content clearfix">
<div class="field field-name-body field-type-text-with-summary field-label-hidden"><div class="field-items"><div class="field-item even" property="content:encoded"><hr />
<h2>Example 1: From a C-style string</h2>
<p>This program takes a C-style string from the user and calculates the number of vowels, consonants, digits and white-spaces.</p>
<pre>
<code>#include &lt;iostream&gt;
using namespace std;

int main()
{
    char line[150];
    int vowels, consonants, digits, spaces;

    vowels =  consonants = digits = spaces = 0;

    cout &lt;&lt; &quot;Enter a line of string: &quot;;
    cin.getline(line, 150);
    for(int i = 0; line[i]!=&#39;\0&#39;; ++i)
    {
        if(line[i]==&#39;a&#39; || line[i]==&#39;e&#39; || line[i]==&#39;i&#39; ||
           line[i]==&#39;o&#39; || line[i]==&#39;u&#39; || line[i]==&#39;A&#39; ||
           line[i]==&#39;E&#39; || line[i]==&#39;I&#39; || line[i]==&#39;O&#39; ||
           line[i]==&#39;U&#39;)
        {
            ++vowels;
        }
        else if((line[i]&gt;=&#39;a&#39;&amp;&amp; line[i]&lt;=&#39;z&#39;) || (line[i]&gt;=&#39;A&#39;&amp;&amp; line[i]&lt;=&#39;Z&#39;))
        {
            ++consonants;
        }
        else if(line[i]&gt;=&#39;0&#39; &amp;&amp; line[i]&lt;=&#39;9&#39;)
        {
            ++digits;
        }
        else if (line[i]==&#39; &#39;)
        {
            ++spaces;
        }
    }

    cout &lt;&lt; &quot;Vowels: &quot; &lt;&lt; vowels &lt;&lt; endl;
    cout &lt;&lt; &quot;Consonants: &quot; &lt;&lt; consonants &lt;&lt; endl;
    cout &lt;&lt; &quot;Digits: &quot; &lt;&lt; digits &lt;&lt; endl;
    cout &lt;&lt; &quot;White spaces: &quot; &lt;&lt; spaces &lt;&lt; endl;

    return 0;
}</code></pre>
<p><strong>Output</strong></p>
<pre>
<samp>Enter a line of string: This is 1 hell of a book.
Vowels: 7
Consonants: 10
Digits: 1
White spaces: 6
</samp></pre>
<hr />
<h2>Example 2: From a String Object</h2>
<p><div  id="block-inject-1" class="block-inject block-inject-1"><div id="block-block-153" class="block block-block">

    
  <div class="content">
    <!-- /8095840/.2_A.34657.4_Programiz.com_tier1 -->
<div id='div-gpt-ad-1527670353707-0'>
<script>
if (window.innerWidth < 900) {
          googletag.cmd.push(function() { googletag.display('div-gpt-ad-1527670353707-0'); });
      }
</script>
</div>

<!-- /8095840/.2_A.34660.4_Programiz.com_tier1 -->
<div id='div-gpt-ad-1527670429257-0'>
<script>
if (window.innerWidth >= 900) {
    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1527670429257-0'); });
}
</script>
</div>  </div>
</div>
</div><div class="clearfix"></div><p>This program takes a string object from the user and calculates the number of vowels, consonants, digits and white-spaces.</p>
<pre>
<code>#include &lt;iostream&gt;
using namespace std;

int main()
{
    string line;
    int vowels, consonants, digits, spaces;

    vowels =  consonants = digits = spaces = 0;

    cout &lt;&lt; "Enter a line of string: ";
    getline(cin, line);

    for(int i = 0; i &lt; line.length(); ++i)
    {
        if(line[i]=='a' || line[i]=='e' || line[i]=='i' ||
           line[i]=='o' || line[i]=='u' || line[i]=='A' ||
           line[i]=='E' || line[i]=='I' || line[i]=='O' ||
           line[i]=='U')
        {
            ++vowels;
        }
        else if((line[i]&gt;='a'&& line[i]&lt;='z') || (line[i]&gt;='A'&& line[i]&lt;='Z'))
        {
            ++consonants;
        }
        else if(line[i]&gt;='0' && line[i]&lt;='9')
        {
            ++digits;
        }
        else if (line[i]==' ')
        {
            ++spaces;
        }
    }

    cout &lt;&lt; "Vowels: " &lt;&lt; vowels &lt;&lt; endl;
    cout &lt;&lt; "Consonants: " &lt;&lt; consonants &lt;&lt; endl;
    cout &lt;&lt; "Digits: " &lt;&lt; digits &lt;&lt; endl;
    cout &lt;&lt; "White spaces: " &lt;&lt; spaces &lt;&lt; endl;

    return 0;
}</code></pre>
<p><strong>Output</strong></p>
<pre>
<samp>Enter a line of string: I have 2 C++ programming books.
Vowels: 8
Consonants: 14
Digits: 1
White spaces: 5
</samp></pre>
</div></div></div></div>
</div>  </div>
</div>
  </div>



</div>
<div id="footer">
<ul>
<li><a  href="carrer.php" >Careers</a></li>
<li><a  href="help.php" >Help</a></li>
<li><a  href="contact.php" >Contact Us</a></li>
  <p class="copy">&copy; 2019 c++tutorial.com All Rights Reserved.</p>

</ul>
</div>
</body>
</html>
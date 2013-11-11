<!DOCTYPE html>
<html>
  <head>
    <title>Demonstration Alpha</title>
  </head>
  <body>

<!-- EDIT CONTENT FROM HERE DOWN -->
  	<h1>Alpha</h1>
    <p><strong>Absolute Minimal Needs</strong></p>
    <a href="{{URL::to('demo/beta')}}">Next -> Beta</a>
    <p>Welcome!</p>
  	<p>This series of pages should represent steps taken to create a minimal template to build a working bootstrap demo from scratch.  Each page will add to the last, and you can, for example, flip back and forth between two pages to see the effect of a given addition.  I've tried to organize each step in small chunks, labeling each according to the phoenetic alphabet.</p>
    <p>At any time, you can manually type a URL in like this:</p>
    <ul>
      <li><strong>http://myapp.gristech.com/demo/alpha</strong></li>
      <li><strong>http://myapp.gristech.com/demo/beta</strong></li>
      <li><strong>http://myapp.gristech.com/demo/charlie</strong></li>
    </ul>
    <p>...and so on.</p>
    <p>You can also press "Control-U" to view the source of each page as we go.</p>
    <p>Better yet, use Chrome, and press "Control-Shift-I" to experience the fabulous developer tools.</p>
  	<p>Even better than that, clone this project for yourself, fire up your favorite text-editor (my favourite is Sublime), and experiment or re-build each step for yourself.  Doing so is likely the best way to learn.</p>
    <p>Without further ado:</p>
    <h2>Step 1:</h2>
    <p>Please note that, besides a the actual <em>content</em> of this page (a few paragraphs and a couple of <code>{{{'<a>'}}}</code> elements) essentially, all the <em>structure</em> of this page consists of is this:</p>

<pre>{{{"<!DOCTYPE html>
<html>
  <head>
    <title>Your title here</title>
  </head>
  <body>
    <!-- Your content here -->
  </body>
</html>"}}}
</pre>
<p>This is the absolute minimum needed for a page to display: it is extremely simple...
  <ol>
    <li>A doctype declaration</li>
    <li>an html tag</li>
    <li>a head tag</li>
    <li>a title tag</li>
    <li>a body tag</li>
  </ol>
</p>
It may be helpful to visualize it as an outline like this:
<ol>
  <li>doctype</li>
  <li>html
    <ol>
      <li>head
        <ol>
          <li>title</li>
        </ol>
      </li>
      <li>body</li>
    </ol>
  </li>
</ol>
<p>Next up: a few basics in our head.</p>
<a href="{{URL::to('demo/beta')}}">Next -> Beta</a>
<!-- STOP EDITING CONTENT HERE  -->

  </body>

</html>
http://stackoverflow.com/questions/7529266/git-global-ignore-not-working

remove a file from git
git rm --cached fileName

remove a directory from git
git rm -r --cached folderName

set global ignore:
sudo nano ~/.gitignore_global
//add your stuff

or
git config --global filename ~/.gitignore_global 

or
core.excludesfile defaults to $HOME/.config/git/ignore respectively when these files exist.

<?php
$str=<<<EOT
voila
EOT;
?>
<pre><code><?=e($str)?></code></pre>

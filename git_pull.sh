cd /home/vamosmudarportugal_org/public_html;

git status > git.txt;
git pull origin master >> git.txt;
git rev-parse --verify HEAD >> git.txt;

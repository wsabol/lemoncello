echo $PWD
whoami

status=$(git status)

echo "-- Initial Status"
echo "$status"

if ! echo "$status" | grep -q "On branch master"; then
    echo "-- Checkout master branch"
    git checkout master
fi

if echo "$status" | grep -q "Your branch is ahead"; then
    echo "-- Push..."
    git push origin master
elif echo "$status" | grep -q "Your branch and 'origin/master' have diverged"; then
    echo "-- Pull,Rebase and Push..."
    git pull --rebase
    git push origin master
elif ! echo "$status" | grep -q "working directory clean"; then
    echo "-- Hard Reset..."
    git reset --hard origin/master
fi

echo "-- Pulling..."
git pull

finalstatus=$(git status)

echo "-- Final Status"
echo "$finalstatus"

if ! echo "$finalstatus" | grep -q "working directory clean"; then
    php /home/saboldru/public_html/jeslyn/common/cmd.smail.php /to="wsabol39@gmail.com" /subject="Git Status Alert" /body="$finalstatus"
fi

exit

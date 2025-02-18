echo " Enter total size here"
read t
count=1
while [ $t -ge $count ]
do
	echo "$t"
	t=$((t-1))
done

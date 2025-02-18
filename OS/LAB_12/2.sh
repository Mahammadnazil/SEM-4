echo "Enter n here"
read n
count=1
while [ $count -le $n ]
do
	echo "$count"
	count=$((count+1))
done
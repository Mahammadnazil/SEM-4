echo " Enter total size here"
read t
count=1
while [ $count -le $t ]
do
	echo "Enter number here"
	read n
	sum=$((sum+n))
	
	count=$((count+1))
done
echo " sum is $sum"
avg=$((sum/t))	
echo "Average is $avg"
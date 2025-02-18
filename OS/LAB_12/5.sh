# echo "Enter n here"
# read n
# count=1
# while [ $count -le $n ]; do
# 	if [[ $count%2==0 ]]; then
# 		echo "$count"
# 	fi
# 	count=$((count+1))
# done


echo " Enter total size here"
read t
count=1
while [ $count -le $t ]
do
	# echo "Enter number here"
	# read n
	if [[ $((count%2)) -ne 0 ]]; then
		echo "$count"
	fi
	count=$((count+1))
done

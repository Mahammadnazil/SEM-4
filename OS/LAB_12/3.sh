echo "enter number here"
read n
i=1
fact=1
while [ $i -le $n ]
do
	fact=$((fact*i))
	i=$((i+1))
done
echo $fact
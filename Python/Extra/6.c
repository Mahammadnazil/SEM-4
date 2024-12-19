#include<stdio.h>
void main()
{
	float maths,english,hindi,science,total,percentage;
	printf("Enter marks of maths");
	scanf("%f",&maths);
	printf("Enter marks of english");
	scanf("%f",&english);
	printf("Enter marks of hindi");
	scanf("%f",&hindi);
	printf("Enter marks of science");
	scanf("%f",&science);

	total=maths+english+hindi+science;

	percentage=total/4;

	printf("total=%f\n",total);
	printf("percentage=%f",percentage);
}
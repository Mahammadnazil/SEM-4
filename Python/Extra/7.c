#include<stdio.h>
void main()
{
	int h,b;
	float area;
	printf("enter height:");
	scanf("%d",&h);
	printf("enter breath:");
	scanf("%d",&b);
	area=0.5*h*b;
	printf("area of triangle =%f",area);
}
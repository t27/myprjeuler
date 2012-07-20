#include <stdio.h>

//Problem 19-calculates no of times the first(Nth) day of the month was a sunday(reqDAY)
/*vardes=>
 * y=year
 * m=month
 * d1=firstday of month(convention--> mon=1, tue=2, wed=3..... sun=7)
 * noofdays(month,year)=returns no of day in given month in given year
 * incday(n,d) increases day by n , returns value bet [1,7], just how days go by ;)
 */
#define INITYR 1900//first year to check
#define FINLYR 2000//last year to check
#define DAYof_INITYR 1//Nth day of first month of the first yearfor eg if u want first day then put 1, max value is 28, to check 29,30,31, code must be modified
#define reqDAY 7//the day of interest

// to check last day or second last day of a month, u can use this tool a little smartly ;), for eg if u want to count how many last days of a month were sundays, u can put reqDAY as 1 and DAYof_INITYR as 1, basically, counting how many firstdays were mondays, and u will hav to check DEC 31 of FINLYR manually
int incday(int n,int d)
{
  int i;
  for(i=0;i<n;i++)
  {
	if(d==7)
	  d=1;
	else
	  d++;
  }
  return d;
}

int isLeap(int y)
{
  if((y%4==0&&y%100!=0)||(y%400==0))
	return 1;
  else
	return 0;
}

int noofdays(int mon,int yr)
{
  switch(mon)
  {
	case 1:
	case 3:
	case 5:
	case 7:
	case 8:
	case 10:
	case 12:return 31;break;
	
	case 4:
	case 6:
	case 9:
	case 11:return 30;break;
	case 2:
	  if(isLeap(yr))
		return 29;
	  else
		return 28;
	  break;
  }
}
		  
	
int main()
{
  int y,m,d1;
  int n,x;
  d1=DAYof_INITYR;
  y=INITYR;
  int ans=0;
  while(y!=FINLYR+1)
  {
	m=1;
	while(m!=13)
	{
	  n=noofdays(m,y);
	  x=n%7;
	  d1=incday(x,d1);
	  if(d1==reqDAY)
		ans++;
	  m++;
	}
	y++;
	if(y==INITYR)
	  ans=0;
  }
  printf("\n%d\n",ans);
  return 0;
}
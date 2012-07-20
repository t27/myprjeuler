#include <stdio.h>
//find 10001st prime
//find nth prime
typedef unsigned long long vlong;

int isPrime(vlong a)
{
  vlong i;
  if(a%2==0)
  return 0;
  
  for(i=3;i<a/2;i+=2)
  {
	if(a%i==0)
	{
	  return 0;
	}
  }
  return 1;
}	  

int main()
{
  int n=0;
  vlong i;
  int num=10001;
  for(i=0;;i++)
  {
	printf("%llu  %d\n",i,n);
	if(isPrime(i))
	  n++;
	if (n==num)
	  break;
  }
  printf("%llu %d",i,n);

  return 0;
}
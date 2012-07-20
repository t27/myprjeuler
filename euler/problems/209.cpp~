#include <stdio.h>
#include <inttypes.h>

int getInp2(int num)
{
  int temp=num<<1;
  temp= temp&63;
  
  int a,b,c,d;
  a=num&32;//100000 ie abcdef
  b=num&16;
  c=num&8;
  d=a^(b&c);
  temp=temp|d;
  return temp;
}
int getBit(int num,unsigned long long table)//gives the num th digit in binary representation of table
{
  int n=63-num;
  long long tablevalue=table>>n;
  int returnvalue=tablevalue&1;
  return returnvalue;
}
int main()
{
  int i,n2;
  int ans;
  unsigned long long j,count;
  count=0;
  //j=18446744073709551615LLU;

  for(i=0;i<64;i++)
  {
	n2=getInp2(i);
	//printf("doing HUGE loop for %d\n",i);
	//for(j=0;j<=18446744073709551615LLU;j++)
	//{
	  printf("%d %d\n",i,n2);
	  //ans=getBit(i,j) & getBit(n2,j);
// 	  if(ans==0)
// 		count++;
// 	  if(j+1==0)
// 		//break;
	//}
  }
  //printf("%llu",count);
//   int numb;
//   long long tablea;
//   while(numb!=50)
//   {
// 	scanf("%d,%lld",&numb,&tablea);
// 	printf("%d",getBit(numb,tablea));s
//   }
  return 0;
}
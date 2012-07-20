#include <stdio.h>
//spiral gives a formula on observation-->for n=3,5,7,....,1001,  sum of up right=sigma[n^2] for n= 3,5,7,9,....
//similrly for top left-->sigma(n^2-(n-1)) bottom left-->sigma(n^2-(n-1)-(n-1)) and bottom right--> sigma(n^2 - 3(n-1))
//so sum of diagonals= 1+sigma(4 * n^2 -6*(n-1)) for n=3,5,7....,1001
int main()
{
  int i;
  long ans=0;
  for(i=3;i<1002;i+=2)
	ans+=((4*i*i)-6*(i-1));
  ans+=1;
  printf("ANS=%ld\n",ans);
  return 0;
}
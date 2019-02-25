#include <math.h>
#include <stdio.h>
int main(){
    int N; 
    scanf("%d",&N);
    if(N%2!=0)
        printf("Weird");
    else
        {
        if(2<N&&N<5)
          printf("Not Weird");   
        else 
        {
            if(6<N&&N<=20)
            printf("Weird");
            else
             printf("Not Weird");
    }
    }
    
    return 0;

}
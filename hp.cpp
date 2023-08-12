#include <iostream>
#include <iomanip>
#include <bits/stdc++.h>
#include <vector>
using namespace std;
int main(){
    long long int t;
    cin>>t;
    int a[t];
    int b[t];
    int c[t];
    for (int i = 1; i <= t; i++)
    {   
        long int x;
        cin>>x;
        a[i]=x;
    }
    for (int i = 1; i <= t; i++)
    {
        long int y;
        cin>>y;
        b[i]=y;
    }
    for (int i = 1; i <= t; i++)
    {
        long int z;
        cin>>z;
        c[i]=z;
    }
    int f=0;
    for (int i = 1; i <= t; i++)
    {
        for (int j = 1; j <= t; j++)
        {
            if(a[i]==b[c[j]]){
                f++;   
            }
        }
    }
    cout<<f<<endl;
    
    
    
    
    return 0;
}
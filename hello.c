#include <stdio.h>

int main(void)
{
    printf("What is your name: ");
    scanf("%s", name);
    printf("Welcome %s, hope you're having a good time", name);
    return (0);
}
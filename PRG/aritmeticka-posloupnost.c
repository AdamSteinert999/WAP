#include <stdio.h>
#include <stdlib.h>

void generuj (int a1, int d, int n) {
    for(int i = 0; i < n; i++) {
        a1 = a1 + d;
        printf ("%d\n", a1);
    }

}

int an (int a1, int d, int n) {
    n = a1 + (n - 1) * d;
    printf("N = %d\n", n);
    printf("A1 = %d\n", a1);
    printf("D = %d\n", d);

    return n;
}

int main () {

    generuj (8, 8, 8);

    an (8, 8, 8);



    return 0;
}

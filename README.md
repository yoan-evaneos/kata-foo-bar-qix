# kata-foo-bar-qix
2018-03-15 - Roxed by Fabien, Skander and Yoan

## First Iteration : 
Loop from 1 to 100.
- If the index is multiple of 3, we want to display `foo`.
- If the index is multiple of 5, we want to display `bar`.
- If the index is multiple of 7, we want to display `qix`.
- Otherwise, we just display the index.

Rules could be add : 15 is multiple of 3 and 5 --> Should display foobar.

Examples : 
I loop from 1 to 15. The result must be
```
1
2
foo
4
bar
foo
qix
8
foo
bar
11
foo
13
qix
foobar
```

## Second Iteration :
- If the index contains the number 3, we want to display `foo`
- If the index contains the number 5, we want to display `bar`
- If the index contains the number 7, we want to display `qix`

We want to display firstly the multiple rule, then the contains rule for each number.
Example : 
```35 will display foofoobar```

Examples : 
I loop from 1 to 15. The result must be
```
1
2
foofoo
4
barbar
foo
qixqix
8
foo
bar
11
foo
foo
qix
foobarbar
```

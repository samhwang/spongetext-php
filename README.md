# spOngE-TEXt

CoNveRT a REGuLAR STRiNg inTO sPoNgetext. cAN BE USeD tO MaKE fUn Of STuPiD SEntENCeS.

Inspried from this [repo](https://github.com/peterlravn/My-projects/blob/master/A%20ScrIpt%20tO%20MaKE%20fUN%20of%20A%20sENteNcE%20v.2.ipynb)
and this [reddit post](https://www.reddit.com/r/Python/comments/j8kpes/i_made_a_script_that_randomly_capitalizes_letters/).

I built the same thing in:

- [Golang](https://github.com/samhwang/spongetext-go)
- [TypeScript](https://github.com/samhwang/spongetext)

## Prerequisites

- PHP 8.0
- Composer 2.0

## Install dependencies

```shell
composer install
```

## Run the script

```shell
./bin/spongetext.php
```

## Examples

The input can either be a single word...

```shell
$ ./bin/spongetext.php
TYpesCripT
```

...or multiple words in quotation marks...

```shell
$ ./bin/spongetext.php "hello world"
heLlo WORld
```

...or multiple words WITHOUT quotation marks

```shell
$ ./bin/spongetext.php My name is Sam
My NaME Is SAm
```

Look ma, no params!

```shell
$ ./bin/spongetext.php
Type in a sentence to spongify: Look ma, no params!
LOOK mA, no paraMS!
```

Using it with the famous `fortune` program.

```shell
$ ./bin/spongetext.php `fortune`
DOn'T HaTE YOURSELF in the moRNiNg sLeeP TilL NoON.
```

... or if you're a command line nerd

```shell
$ fortune | ./bin/spongetext.php
Type in a sentence to spongify: ‣ A visit to a strange place will bring fresh work.
A visIt TO A sTRaNGe PLacE wilL BrInG fResH Work.
```

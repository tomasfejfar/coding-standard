<?php

class Foo
{

	/** @var string */
	private $foo;

	/** @var string */
	static public $static1;

	/** @var string */
	public static $static2;

	public function __construct()
	{
		/** @var string[] $a */
		$a = $this->get();

		/** @see https://www.slevomat.cz */
		$b = null;

		/** @var iterable|array|\Traversable $d Lorem ipsum */
		$d = [];

		/** @var string $f */
		foreach ($e as $f) {

		}

		foreach ($ee->iterate() as $ff) {
			/** @var \DateTimeImmutable $ff */
			$fff = $ff->format('Ymd');
		}

		foreach ($eee as $fff) {
			/** @var \DateTimeImmutable $fff */
			[$ffff] = $fff->format('Ymd');
		}

		foreach ($eeee as $ffff) {
			/** @var \DateTimeImmutable $ffff */
			list($fffff) = $ffff->format('Ymd');
		}

		/** @var \DateTimeImmutable $h */
		while ($h = current($g)) {

		}

		while ($hh = current($gg)) {
			/** @var \DateTimeImmutable $hh */
			$hhh = 'anything';
		}

		/* TODO */
		$i = 'i';

		/* @variable */
		$j = 'j';

		/** @var string $k */
		list($k) = ['k'];

		/** @var string $l */
		[$l] = ['l'];
	}

	public function get()
	{
		$a = [];
		return $a;
	}

}

class IntersectionAndGeneric
{

	public function anything()
	{
		/** @var (boolean | null | integer)[] $a */
		$a = null;

		/** @var integer & boolean<boolean, integer> $b */
		$b = 0;

		/** @var string & (integer | float) $c */
		$c = 'string';

		/** @var string | (float&integer) $d */
		$d = 'string';

		/** @var boolean[][][] $e */
		$e = [];

		/** @var (integer | boolean)[][][] $f */
		$f = [];

		/** @var integer|(string<foo> & boolean)[] $g */
		$g = 0;

		/** @var \Foo<\Boo<integer, boolean>> $h */
		$h = [];
	}

}

<?php declare(strict_types = 1);

namespace PHPStan\Rules\RuleErrors;

/**
 * @internal Use PHPStan\Rules\RuleErrorBuilder instead.
 */
class RuleError95 implements \PHPStan\Rules\RuleError, \PHPStan\Rules\LineRuleError, \PHPStan\Rules\FileRuleError, \PHPStan\Rules\TipRuleError, \PHPStan\Rules\IdentifierRuleError, \PHPStan\Rules\NonIgnorableRuleError
{

	public string $message;

	public int $line;

	public string $file;

	public string $tip;

	public string $identifier;

	public function getMessage(): string
	{
		return $this->message;
	}

	public function getLine(): int
	{
		return $this->line;
	}

	public function getFile(): string
	{
		return $this->file;
	}

	public function getTip(): string
	{
		return $this->tip;
	}

	public function getIdentifier(): string
	{
		return $this->identifier;
	}

}
<?
class TipoCarro {
    /**
     * @var string | null
     */
    private $id = null;

    /**
     * @var string | null
     */
    private $nome;

    public function getId(): ?string {
        return $this->id;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $nome): self {
        $this->nome = $nome;
        return $this;
    }

    static function  getDatabaseTipoCarro(object $databaseData): self {
        $tipoCarro = new TipoCarro();
        $tipoCarro->setNome($databaseData->nome);

        if ($databaseData->id) {
            $this->id = $databaseData->id;
        }

        return $tipoCarro;
    }
}

<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\Stdlib\Hydrator;

/**
 * Funcionario
 *
 * @ORM\Table(name="tb_funcionario")
 * @ORM\Entity(repositoryClass="Application\Entity\Repository\FuncionarioRepository")
 */
class Funcionario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_FUNC", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFunc;

    /**
     * @var string
     *
     * @ORM\Column(name="NOME_FUNC", type="string", length=100, nullable=false)
     */
    private $nomeFunc;

    /**
     * @var string
     *
     * @ORM\Column(name="FUNCAO_FUNC", type="string", length=80, nullable=false)
     */
    private $funcaoFunc;

    /**
     * @var string
     *
     * @ORM\Column(name="CPF_FUNC", type="string", length=11, nullable=false)
     */
    private $cpfFunc;

    /**
     * @var string
     *
     * @ORM\Column(name="RG_FUNC", type="string", length=15, nullable=false)
     */
    private $rgFunc;

    /**
     * @var string
     *
     * @ORM\Column(name="ORG_EMISSOR_FUNC", type="string", length=20, nullable=false)
     */
    private $orgEmissorFunc;

    /**
     * @var string
     *
     * @ORM\Column(name="USUARIO_FUNC", type="string", length=10, nullable=false)
     */
    private $usuarioFunc;

    /**
     * @var string
     *
     * @ORM\Column(name="SENHA_FUNC", type="string", length=10, nullable=false)
     */
    private $senhaFunc;

    /**
     * @var string
     *
     * @ORM\Column(name="DIR_FOTO_PF_FUNC", type="string", length=100, nullable=false)
     */
    private $dirFotoPfFunc;

    /**
     * @var boolean
     *
     * @ORM\Column(name="NIVEL_ACESSO_FUNC", type="boolean", nullable=false)
     */
    private $nivelAcessoFunc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATA_ANIVERSARO_FUNC", type="date", nullable=false)
     */
    private $dataAniversaroFunc;

    /**
     * @var string
     *
     * @ORM\Column(name="SITUACAO_FUNC", type="string", length=1, nullable=false)
     */
    private $situacaoFunc;

    public function __construct(array $options = array()) {
//        $hydrator = new Hydrator\ClassMethods();
//        $hydrator->hydrate($options, $this);
        (new Hydrator\ClassMethods())->hydrate($options, $this);
    }

    /**
     * Get idFunc
     *
     * @return integer 
     */
    public function getIdFunc()
    {
        return $this->idFunc;
    }

    /**
     * Set nomeFunc
     *
     * @param string $nomeFunc
     * @return TbFuncionario
     */
    public function setNomeFunc($nomeFunc)
    {
        $this->nomeFunc = $nomeFunc;

        return $this;
    }

    /**
     * Get nomeFunc
     *
     * @return string 
     */
    public function getNomeFunc()
    {
        return $this->nomeFunc;
    }

    /**
     * Set funcaoFunc
     *
     * @param string $funcaoFunc
     * @return TbFuncionario
     */
    public function setFuncaoFunc($funcaoFunc)
    {
        $this->funcaoFunc = $funcaoFunc;

        return $this;
    }

    /**
     * Get funcaoFunc
     *
     * @return string 
     */
    public function getFuncaoFunc()
    {
        return $this->funcaoFunc;
    }

    /**
     * Set cpfFunc
     *
     * @param string $cpfFunc
     * @return TbFuncionario
     */
    public function setCpfFunc($cpfFunc)
    {
        $this->cpfFunc = $cpfFunc;

        return $this;
    }

    /**
     * Get cpfFunc
     *
     * @return string 
     */
    public function getCpfFunc()
    {
        return $this->cpfFunc;
    }

    /**
     * Set rgFunc
     *
     * @param string $rgFunc
     * @return TbFuncionario
     */
    public function setRgFunc($rgFunc)
    {
        $this->rgFunc = $rgFunc;

        return $this;
    }

    /**
     * Get rgFunc
     *
     * @return string 
     */
    public function getRgFunc()
    {
        return $this->rgFunc;
    }

    /**
     * Set orgEmissorFunc
     *
     * @param string $orgEmissorFunc
     * @return TbFuncionario
     */
    public function setOrgEmissorFunc($orgEmissorFunc)
    {
        $this->orgEmissorFunc = $orgEmissorFunc;

        return $this;
    }

    /**
     * Get orgEmissorFunc
     *
     * @return string 
     */
    public function getOrgEmissorFunc()
    {
        return $this->orgEmissorFunc;
    }

    /**
     * Set usuarioFunc
     *
     * @param string $usuarioFunc
     * @return TbFuncionario
     */
    public function setUsuarioFunc($usuarioFunc)
    {
        $this->usuarioFunc = $usuarioFunc;

        return $this;
    }

    /**
     * Get usuarioFunc
     *
     * @return string 
     */
    public function getUsuarioFunc()
    {
        return $this->usuarioFunc;
    }

    /**
     * Set senhaFunc
     *
     * @param string $senhaFunc
     * @return TbFuncionario
     */
    public function setSenhaFunc($senhaFunc)
    {
        $this->senhaFunc = $senhaFunc;

        return $this;
    }

    /**
     * Get senhaFunc
     *
     * @return string 
     */
    public function getSenhaFunc()
    {
        return $this->senhaFunc;
    }

    /**
     * Set dirFotoPfFunc
     *
     * @param string $dirFotoPfFunc
     * @return TbFuncionario
     */
    public function setDirFotoPfFunc($dirFotoPfFunc)
    {
        $this->dirFotoPfFunc = $dirFotoPfFunc;

        return $this;
    }

    /**
     * Get dirFotoPfFunc
     *
     * @return string 
     */
    public function getDirFotoPfFunc()
    {
        return $this->dirFotoPfFunc;
    }

    /**
     * Set nivelAcessoFunc
     *
     * @param boolean $nivelAcessoFunc
     * @return TbFuncionario
     */
    public function setNivelAcessoFunc($nivelAcessoFunc)
    {
        $this->nivelAcessoFunc = $nivelAcessoFunc;

        return $this;
    }

    /**
     * Get nivelAcessoFunc
     *
     * @return boolean 
     */
    public function getNivelAcessoFunc()
    {
        return $this->nivelAcessoFunc;
    }

    /**
     * Set dataAniversaroFunc
     *
     * @param \DateTime $dataAniversaroFunc
     * @return TbFuncionario
     */
    public function setDataAniversaroFunc($dataAniversaroFunc)
    {
        $dataAniversaroFunc = date('Y-d-m', strtotime($dataAniversaroFunc));
        
        $this->dataAniversaroFunc = new \DateTime($dataAniversaroFunc);

        return $this;
    }

    /**
     * Get dataAniversaroFunc
     *
     * @return \DateTime 
     */
    public function getDataAniversaroFunc()
    {
        return $this->dataAniversaroFunc;
    }

    /**
     * Set situacaoFunc
     *
     * @param string $situacaoFunc
     * @return TbFuncionario
     */
    public function setSituacaoFunc($situacaoFunc)
    {
        $this->situacaoFunc = $situacaoFunc;

        return $this;
    }

    /**
     * Get situacaoFunc
     *
     * @return string 
     */
    public function getSituacaoFunc()
    {
        return $this->situacaoFunc;
    }
    
    public function toArray(){
        
        return array(
            'idFunc' => $this->getIdFunc(),
            'nomeFunc' => $this->getNomeFunc(),
            'funcaoFunc' => $this->getFuncaoFunc(),
            'cpfFunc' => $this->getCpfFunc(),
            'rgFunc' => $this->getRgFunc(),
            'orgEmissorFunc' => $this->getOrgEmissorFunc(),
            'usuarioFunc' => $this->getUsuarioFunc(),
            'senhaFunc' => $this->getSenhaFunc(),
            'dirFotoPfFunc' => $this->getDirFotoPfFunc(),
            'nivelAcessoFunc' => $this->getNivelAcessoFunc(),
            'dataAniversaroFunc' => $this->getDataAniversaroFunc()->format('d/m/Y'),
            'situacaoFunc' => $this->getSituacaoFunc()
        );
    }
}

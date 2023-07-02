<?php
header("Content-Type: text/html;charset=utf-8");
// error_reporting(0);
echo "<!-- YmFja3Vwcw== -->";
class aa
{
    protected $username = 'hack';
    protected $cmd = 'NULL';
    public function __construct($username,$cmd)
    {
        $this->username = $username;
        $this->cmd = $cmd;
    }
    function __wakeup()
    {
        $this->username = 'guest';
    }
    function __destruct()
    {
        if(preg_match("/cat|more|tail|less|head|curl|nc|strings|sort|echo/i", $this->cmd))
        {
            exit('</br>flag能让你这么容易拿到吗？<br>');
        }
        if ($this->username === 'admin')
        {
            $a = `$this->cmd`;
            var_dump($a);
        }else
        {
            echo "</br>给你个安慰奖吧，hhh！</br>";
            die();
        }
    }
}


class ctf{
	protected $username='admin';
	protected $cmd='tac flag.php';
}
$a=new ctf();
echo(serialize($a));
?>

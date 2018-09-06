<?php
trait PeanutButter {
    function traitName() {echo __TRAIT__;}
}

trait PeanutButterAndJelly {
    function traitName2() {echo __TRAIT__;}
    use PeanutButterAndJelly;
}

class Test {
    use PeanutButterAndJelly;
}

(new Test)->traitName2(); //PeanutButter
?>
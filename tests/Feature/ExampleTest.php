<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function addNumber($a, $b)
    {
        return $a + $b;
    }
 
    public function testAssert()
    {
        $sampleArray = [
            1 => 'Java',
            2 => 'PHP',
            3 => 'Python',
            4 => 'C#',
            5 => 'Ruby'
        ];
 
        $emptyArray = [];
 
        $this->assertEquals(5, $this->addNumber(2, 3));
        $this->assertCount(5, $sampleArray);
        $this->assertNotEmpty($sampleArray);
        $this->assertEmpty($emptyArray);
        $this->assertArraySubset([1 => 'Java', 3 => 'Python'], $sampleArray);
        $this->assertArrayHasKey(3, $sampleArray);
    }




public function testEmpty()
    {
        $stack = array();
        $this->assertEmpty($stack);

        return $stack;
    }

    /**
     * @depends testEmpty
     */
    public function testPush(array $stack)
    {   
        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack)-1]);
        $this->assertNotEmpty($stack);
        return $stack;
    }

    /**
     * @depends testPush
     */
    public function testPop(array $stack)
    {
        $this->assertEquals('foo', array_pop($stack));
        $this->assertEmpty($stack);
    }







    /**
    * @dataProvider testadditionProvider   
    */
        public function testAdd($a, $b, $expected)    
        {        
            $test = $this->assertEquals($expected, $a + $b);
            $a1 = $a;
            $b1=$b;
            $exp = $a1 + $b1;
            $test = $this->assertSame($exp,$a1 + $b1);
        }    
        public function testadditionProvider()    
        { 
            $arr =  [                      
                [1, 4, 5],            
                [1, 0, 1],            
                [1, 1, 2]        
            ]; 
            
            $this->assertTrue(true);     
            return $arr;
        }
}

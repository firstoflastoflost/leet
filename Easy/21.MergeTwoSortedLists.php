<?php
/**
 *
 * Input: list1 = [1,2,4], list2 = [1,3,4]
 * Output: [1,1,2,3,4,4]
 *
 * Example 2:
 *
 * Input: list1 = [], list2 = []
 * Output: []
 *
 * Example 3:
 *
 * Input: list1 = [], list2 = [0]
 * Output: [0]
 *
 */

class ListNode
{
    public int $val;
    public ?ListNode $next = null;

    public function __construct($val = 0, $next = null)
    {
        $this->val = $val;
        $this->next = $next;
    }

}

$list1 = new ListNode(1);

$list2 = new ListNode();

function mergeTwoLists(ListNode $list1, ListNode $list2)
{
    $dummyNode = new ListNode(0);

    $tail = $dummyNode;

    while ($list1 !== null && $list2 !== null) {
        if ($list1->val < $list2->val) {
            $tail->next = $list1;
            $list1 = $list1->next;
        } else {
            $tail->next = $list2;
            $list2 = $list2->next;
        }

        $tail = $tail->next;
    }

    if ($list1 !== null) {
        $tail->next = $list1;
    } else {
        $tail->next = $list2;
    }

    return $dummyNode->next;
}


var_dump(mergeTwoLists($list1, $list2));

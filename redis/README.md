# Redis
## 什么是redis
- 基于内存
- 非关系型数据库
## 数据类型
- String 存`int`,`string`,`float`都行,对`int`能做加减,对`string`能操作
- List 一个序列集合且每个节点都有一个元素,两端压,弹元素,用于实现队列
- Set 各不相同的元素
- Hash 键值对散列组,key字符串,能按key进行增删
- Sort Set 带分数的`score-value`有序集合,score是`float`型
## 实际操作
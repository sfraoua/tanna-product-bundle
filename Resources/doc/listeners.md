#Listen to TannaProductBundle Events

```yml
services:
  my_litstener:
          class: MyBundle\Listener\FooListener
          tags:
              - { name: 'kernel.event_listener', event: 'tanna_product.product.create.initialize', method: 'doStuff' }
```

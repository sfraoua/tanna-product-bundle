#Validation
TannaProductBundle use xml validation.

You must enable validation in you condig.yml

```yml
#app/config/config.yml
framework:
    validation:      { enabled: true }
```
    
If you use annotation validation in your project, enable it.
```yml
#app/config/config.yml
framework:
    validation:      { enabled: true, enable_annotations: true }
```

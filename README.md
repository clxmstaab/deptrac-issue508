# deptrac-issue508 repro

## Steps to reproduce

```
# move into a directory of your choice
# ...
# init:
git clone https://github.com/clxmstaab/deptrac-issue508.git .
composer install
composer deptrac
```

### expected result

behat should  report the wrong dependency from FeatureTest on Integration.

https://github.com/clxmstaab/deptrac-issue508/blob/366650d7a1e9a176c8a31ba8f2ff6e5f3058c728/src/feature-test.php#L6-L14

### actual

no errors, everything green

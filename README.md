# ACM TOMS Algorithm 897: VTDIRECT95: Serial and Parallel Codes for the Global Optimization Algorithm DIRECT

VTDIRECT95 is a Fortran 95 implementation of D. R. Jones' deterministic global optimization algorithm called DIRECT, which is widely used in multidisciplinary engineering design, biological science, and physical science applications. The package includes both a serial code and a data-distributed massively parallel code for different problem scales and optimization (exploration vs. exploitation) goals. Dynamic data structures are used to organize local data, handle unpredictable memory requirements, reduce the memory usage, and share the data across multiple processors. The parallel code employs a multilevel functional and data parallelism to boost concurrency and mitigate the data dependency, thus improving the load balancing and scalability. In addition, checkpointing features are integrated into both versions to provide fault tolerance and hot restarts. Important algorithm modifications and design considerations are discussed regarding data structures, parallel schemes, error handling, and portability. Using several benchmark functions and real-world applications, the software is evaluated on different systems in terms of optimization effectiveness, data structure efficiency, parallel performance, and checkpointing overhead. The package organization and usage are also described in detail.

 - This code has been re-uploaded with the permission of Drs. Watson and Sosonkina. Please direct all inqueries to them, contact information below.

## Organization and Usage

The directory ``src`` contains the original ACM TOMS code, with the modifications
described in ``ACM TOMS 41(3):22`` (full citation information is below).

The additional ``README`` and ``UserGuide.pdf`` files in the ``src`` directory
describe the directory structure, installation, testing, and usage information.
Comments at the top of each subroutine provide additional usage details.

The directory ``docs`` provides html code for generating ``VTDIRECT``'s website.

## Citation

To cite this work, please use:

```
    @article{alg897,
        author = {He, Jian and Watson, Layne T. and Sosonkina, Masha},
        title = {Algorithm 897: {VTDIRECT95}: Serial and Parallel Codes for the Global Optimization Algorithm {DIRECT}},
        year = {2009},
        volume = {36},
        number = {3},
        journal = {ACM Trans. Math. Softw.},
        articleno = {17},
        numpages = {24},
        doi = {10.1145/1527286.1527291}
    }
```

with the modifications from:

```
    @article{remark897,
        title={Remark on Algorithm 897: {VTDIRECT95}: Serial and Parallel Codes for the Global Optimization Algorithm {DIRECT}},
        author={Sosonkina, Masha and Watson, Layne T. and He, Jian},
        year={2015},
        journal={ACM Transactions on Mathematical Software},
        volume={41},
        number={3},
        articleno={22},
        numpages={2},
        doi={10.1145/2699459}
    }
```

## Contact

For further information, please contact:

Masha Sosonkina,  
Dept. Computational Modeling and Simulation Engineering  
Old Dominion University
Norfolk, VA 23529  
msosonki@odu.edu  

or  

Layne T. Watson,  
Dept. Computer Science, VPI&SU,  
Blacksburg, VA 24061-0106;  
(540) 231-7540;  
ltw@vt.edu  

<?PHP
namespace App\Repository\Notes;

use Doctrine\ORM\EntityRepository;
use App\Entity\Notes\ProspectsNotes;

class ProspectsNotesRepository extends EntityRepository
{
    public function loadNotesByID($id)
    {
        $qb = $this->createQueryBuilder('a')
            ->andWhere('a.id > :id')
            ->setParameter('id', $id)
            ->orderBy('a.id', 'DESC')
            ->getQuery();

        return $qb->execute();
    }

}